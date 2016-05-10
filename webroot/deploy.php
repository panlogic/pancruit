<?php
require 'recipe/laravel.php';

// Path to pancruit.
$path = '/var/www/pancruit';

// Define a server for deployment.
server('dev', 'panlogic.co.uk', 22)
  ->user('deployer')
  ->identityFile('~/.ssh/id_deployex.pub', '~/.ssh/id_deployex', '')
  ->stage('development')
  ->env('deploy_path', $path); // Define the base path to deploy your project to.

// Set repository.
set('repository', 'git@github.com:panlogic/pancruit.git');

// Path to composer.
set('composer_command', 'composer');

// Set webroot folder.
env('release_webroot', function () {
  return str_replace("\n", '', run("readlink {{deploy_path}}/release")) . '/webroot';
});

// Release path.
env('release_path', function () {
  return str_replace("\n", '', run("readlink {{deploy_path}}/release"));
});

/**
 * TASKS
 */

// Override original composer task (because webroot is in subfolder).
task('deploy:vendors', function () {
  $composer = get('composer_command');
  if (! commandExist($composer)) {
    run("cd {{release_webroot}} && curl -sS https://getcomposer.org/installer | php");
    $composer = 'php composer.phar';
  }
  $composerEnvVars = env('env_vars') ? 'export ' . env('env_vars') . ' &&' : '';
  run("cd {{release_webroot}} && $composerEnvVars $composer {{composer_options}}");
})->desc('Installing vendors');

// Make deployed files writable to www-data group.
task('change_permissions', function() {
  run("chmod -R g+w {{release_path}}");
});

// Symlink .env file.
task('environment', function() {
  run("ln -s {{deploy_path}}/shared/.env {{release_webroot}}");
});

/**
 * Run Laravel5 optimisation commands.
 * Reference: http://sentinelstand.com/article/laravel-5-optimization-commands.
 */
task('optimise', function() {
  cd('{{deploy_path}}/release/webroot');
  run('php artisan optimize');
  run('php artisan config:cache');
  run('php artisan route:cache');
});


/**
 * Deployment script.
 */
task('deploy', [
  'deploy:prepare',
  'deploy:release',
  'deploy:update_code',
  'deploy:vendors',
  'deploy:shared',
  'change_permissions',
  'environment',
  'optimise',
  'deploy:symlink',
  'cleanup',
])->desc('Deploy your project');
?>
