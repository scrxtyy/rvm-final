<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Coins Monitor') }}
            </h2>
            <x-button target="_blank" variant="black"
            class="items-center max-w-xs gap-2">
            <span>Total: {{$coinstotal}} PHP / 200 PHP</span>
            </x-button>

            {{-- <button type="button"
            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            <span>Add Coins</span>
            </button> --}}
            <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                Add Coins
              </button>
            </div>
        
        {{-- <style>
            /*MODAL*/
            .modal {
            display: none; /* Hidden by default */
            }

            /* The Close Button */
            .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            }

            .close:hover,
            .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
            }
        </style> --}}

        </x-slot>

        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
              <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                  <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    Add Coins
                  </h5>
                  <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <label for="">Enter Amount of coins in PHP:  </label>
                    <input type="number" style="color: #1d161d">
                </div>
                <div
                  class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                  <button type="button"
                    class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                    data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="button"
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                    Add
                  </button>
                </div>
              </div>
            </div>
          </div>

        {{-- <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <form>
                    <label for="">Enter Amount of coins in PHP:  </label>
                    <input type="number" style="color: #1d161d">
                    <x-button target="_blank" variant="white"
                    class="items-center max-w-xs gap-2" id="myBtn">
                    <span>Add</span>
                    </x-button>
                </form>
            </div>
        </div> --}}

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full">
                <thead class="border-b bg-gray-800">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Log ID
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Coins IN
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Coins OUT
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Date/Time
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($coinsLog as $coinsLog)
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$coinsLog->log_id}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$coinsLog->coins_in}} PHP
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$coinsLog->coins_out}} PHP
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$coinsLog->created_at}}
                            </td>
                        </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>

{{-- <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        function displayModal() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }   
</script> --}}