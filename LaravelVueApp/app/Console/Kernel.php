protected function schedule(Schedule $schedule)
{
    $schedule->job(new \App\Jobs\SendDailySummaryEmail)->dailyAt('08:00');
}
