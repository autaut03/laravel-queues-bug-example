## How to:

1. Clone the repository
2. Install dependencies
3. Copy .env, generate APP_KEY, and make sure to use non-sync driver for queues. Redis/Beanstalkd will be good.
4. Run `php artisan seed-job` - this will dispatch a job
5. Run the queue using `queue:work` and see this:
```
[2019-01-31 16:03:36][06Ktsv1BRUiUa8i6XPt0aLc1jz5QPx8J] Processing: App\Jobs\MainJob                                                                              
[2019-01-31 16:03:36][] Processing: App\Events\SubEvent                          
[2019-01-31 16:03:36][] Processed:  App\Events\SubEvent                          
[2019-01-31 16:03:36][06Ktsv1BRUiUa8i6XPt0aLc1jz5QPx8J] Processed:  App\Jobs\MainJob                                                                              
```