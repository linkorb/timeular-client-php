Timeular (ZEIº) Client Library for PHP
================

This is a PHP library for [Timeular](https://timeular.com/).

It interacts with their API, which is documented at:

* http://developers.timeular.com/public-api/

## Development, examples and configuration

The `examples/` directory shows you a couple of example usages for listing devices, activities, time-entries and starting/stopping tracking.

The example scripts all look for `TIMEULAR_KEY` and `TIMEULAR_SECRET` environment variables.

To configure those, simply copy the included `.env.dist` to `.env` and enter your own API credentials.

After this you can simply run the examples like this:

    $ php example/get-activities.php
    $ php example/get-devices.php
    $ php example/start-tracking.php <activityId>
    $ php example/stop-tracking.php <activityId>
    $ # etc etc

## License

MIT. Please refer to the [license file](LICENSE) for details.

## Brought to you by the LinkORB Engineering team

<img src="http://www.linkorb.com/d/meta/tier1/images/linkorbengineering-logo.png" width="200px" /><br />
Check out our other projects at [linkorb.com/engineering](http://www.linkorb.com/engineering).

Btw, we're hiring!
