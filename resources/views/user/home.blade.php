@extends('master.master_user')

@section('content')

<style>
    .container {
        padding: 30px;
    }

    .max-a {
        max-width: 30%;
        height: auto;
    }

    .counter {
        padding: 20px 0;
        border-radius: 5px;
        color: aliceblue;
    }

    .count-title {
        font-size: 40px;
        font-weight: normal;
        margin-top: 10px;
        margin-bottom: 0;
        text-align: center;
        color: aliceblue;
    }

    .count-text {
        font-size: 13px;
        color: aliceblue;
        font-weight: normal;
        margin-top: 10px;
        margin-bottom: 0;
        text-align: center;
    }

    .fa-2x {
        margin: 0 auto;
        float: none;
        display: table;
        color: #a3b5c4;
    }

    .bottom-wrapper {
        color: white;
    }

    .card-body {
        background-color: #f8fafc;
    }
</style>
<div class="top-wrapper">
    <div class="container">
        <h1>HAVARA CONSULTING</h1>
        <p font-size="20px">Crafting Strategy Accelerating Performance</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5 mb-4">
            <div class="card  h-100">
                <div class="card-body">
                    <h5 class="card-title text-center">Strategic Service</h5>
                    <img class="card-img-top mx-auto d-block max-a" src="{{ asset('images/1.png') }}">
                </div>
            </div>
        </div>
        <div class="col-sm-5 mb-4">
            <div class="card  h-100">
                <div class="card-body">
                    <h5 class="card-title text-center">Research Service</h5>
                    <img class="card-img-top mx-auto d-block max-a" src="{{ asset('images/2.png') }}">
                </div>
            </div>
        </div>
        <div class="col-sm-5 mb-4">
            <div class="card  h-100">
                <div class="card-body">
                    <h5 class="card-title text-center">Performance Management Application</h5>
                    <img class="card-img-top mx-auto d-block max-a" src="{{ asset('images/5.png') }}">
                </div>
            </div>
        </div>
        <div class="col-sm-5 mb-4">
            <div class="card  h-100">
                <div class="card-body">
                    <h5 class="card-title text-center">HR Service</h5>
                    <img class="card-img-top mx-auto d-block max-a" src="{{ asset('images/3.png') }}">
                </div>
            </div>
        </div>

    </div>
</div>

<div class="bottom-wrapper">
    <h1>COUNTER</h1>
    <div class="container">

        <div class="row text-center">
            <div class="col">
                <div class="counter">
                    <i class="fa fa-code fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                    <p class="count-text ">Staff</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fa fa-coffee fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                    <p class="count-text ">Happy Clients</p>
                </div>
            </div>
            <div class="col">
                <div class="counter">
                    <i class="fa fa-lightbulb-o fa-2x"></i>
                    <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                    <p class="count-text ">Project Complete</p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    (function($) {
        $.fn.countTo = function(options) {
            options = options || {};

            return $(this).each(function() {
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);

                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,
            to: 0,
            speed: 1000,
            refreshInterval: 100,
            decimals: 0,
            formatter: formatter,
            onUpdate: null,
            onComplete: null
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function($) {

        $('.count-number').data('countToOptions', {
            formatter: function(value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>
@endsection