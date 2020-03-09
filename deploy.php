<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'laravel-on-steroids');

// Project repository
set('repository', 'git@github.com:iSerter/laravel-on-steroids.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', [
    '.env'
]);
add('shared_dirs', [
    'storage'
]);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('api.staging.forward.me')
    ->stage('staging')
    ->user('ec2-user')
    ->set('deploy_path', '/var/www/staging/laravel-on-steroids');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

