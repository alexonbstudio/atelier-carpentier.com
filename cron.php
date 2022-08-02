<?php
# Check out if have error and fix
#error_reporting(E_ALL);
#ini_set("display_errors", 1);

require 'libs/autoload.php';
#require libs/custom/
foreach (glob('libs/custom/*.php') as $GlobRequire) { include_once $GlobRequire; }

#configuration
foreach (glob('configuration/*.php') as $GlobConfig) { include_once $GlobConfig; }

$job1 = new \Cron\Job\ShellJob();
if (file_exists('composer.phar')) {
	$job1->setCommand('php composer.phar self-update')
} else {
	$job1->setCommand('curl -sS https://getcomposer.org/installer');
}
	$job1->setSchedule(new \Cron\Schedule\CrontabSchedule('30 3 * * */3'));

$job2 = new \Cron\Job\ShellJob();
$job2->setCommand('php composer.phar update');
$job2->setSchedule(new \Cron\Schedule\CrontabSchedule('30 4 * */1 *'));

$job3 = new \Cron\Job\ShellJob();
$job3->setCommand('php composer.phar dump-autoload -o -a');
$job3->setSchedule(new \Cron\Schedule\CrontabSchedule('50 4 * */1 *'));

$resolver = new \Cron\Resolver\ArrayResolver();
$resolver->addJob($job1);
$resolver->addJob($job2);
$resolver->addJob($job3);

$cron = new \Cron\Cron();
$cron->setExecutor(new \Cron\Executor\Executor());
$cron->setResolver($resolver);

$cron->run();