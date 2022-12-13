<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>        
        <style>
            .wrapper{
            width: 800px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            }
            .wrapper .card{
            background: #fff;
            width: calc(33% - 10px);
            height: 300px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-direction: column;
            box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
            }
            .wrapper .card .circle{
            position: relative;
            height: 150px;
            width: 150px;
            border-radius: 50%;
            cursor: default;
            }
            .card .circle .box,
            .card .circle .box span{
            position: absolute;
            top: 50%;
            left: 50%;
            }
            .card .circle .box{
            height: 100%;
            width: 100%;
            background: #fff;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0.8);
            transition: all 0.2s;
            }
            .card .circle:hover .box{
            transform: translate(-50%, -50%) scale(0.91);
            }
            .card .circle .box span,
            .wrapper .card .text{
            background: -webkit-linear-gradient(left, #581b81, #5e286e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            }
            .circle .box span{
            font-size: 38px;
            font-family: sans-serif;
            font-weight: 600;
            transform: translate(-45%, -45%);
            transition: all 0.1s;
            }
            .card .circle:hover .box span{
            transform: translate(-45%, -45%) scale(1.09);
            }
            .card .text{
            font-size: 20px;
            font-weight: 600;
            }
            @media(max-width: 753px){
            .wrapper{
                max-width: 700px;
            }
            .wrapper .card{
                width: calc(50% - 20px);
                margin-bottom: 20px;
            }
            }
            @media(max-width: 505px){
            .wrapper{
                max-width: 500px;
            }
            .wrapper .card{
                width: 100%;
            }
            }
        </style>
    </x-slot>

    <div class="py-12">
        {{-- @isset($plastic)
          ({{$plastic}})
        @endisset --}}
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="p-6 text-gray-900">
                      {{ __("You're logged in!") }}
                  </div>
              </div>
            </div>

            </div>

              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="p-6 text-gray-900">
                      <div class="wrapper">
                          <div class="card">
                            <div class="circle">
                                <div class="bar"></div>
                                <a href="{{ route('monitor.pet') }}">
                                  <div class="box"><span></span></div>
                                </a>
                            </div>
                          <div class="text">Plastic</div>
                        </div>

                      <div class="card js">
                          <div class="circle">
                            <div class="bar"></div>
                              <a href="{{ route('monitor.tincans') }}">
                                <div class="box"><span></span></div>
                              </a>
                          </div>
                          <div class="text">Tin Cans</div>
                        </div>

                        <div class="card react">
                          <div class="circle">
                            <div class="bar"></div>
                              <a href="{{ route('coins') }}">
                                <div class="box"><span></span></div>
                              </a>
                          </div>
                          <div class="text">Coins</div>
                        </div>
                        
                      </div>
                  </div>
              </div>
      <script>
          let options = {
            startAngle: -1.55,
            size: 152,
            value: {{$plastic}},
            fill: {gradient: ['#8734c1', '#5c3379']}
          }
          $(".circle .bar").circleProgress(options).on('circle-animation-progress',
          function(event, progress, stepValue){
            $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
          });
          $(".js .bar").circleProgress({
            value: {{$tincans}},
          });
          $(".react .bar").circleProgress({
            value: 0.9,
          });
        </script>
</x-app-layout>
