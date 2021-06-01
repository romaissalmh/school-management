<?php
    session_start();
   
    // Flash message helper
    function flash($name , $message , $link, $class = 'alert alert-success alert-dismissible fade show')
    {
       /* echo("hlo");
        if (! empty($name) ) {
            if (! empty($message) && empty($_SESSION['name']) ) {
                if ( !empty($_SESSION[$name]) ) {
                   echo("Hello1");
                   unset( $_SESSION[$name] );
                }
                if (! empty($_SESSION[$name. '_class']) ) {
                    echo("Hello2");
                   unset( $_SESSION[$name. '_class'] );
                }
                $_SESSION[$name] = $message;
                $_SESSION[$name. '_class'] = $class;
            } elseif ( empty($mesage) && !empty($_SESSION[$name]) ) {
                echo("Hello3");
                $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
                echo '<div class="'.$class.'" id="msg-flash" role="alert">' . $name . '
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span></button>
                     </div>';
                
               unset($_SESSION[$name]);
                unset($_SESSION[$name.'_class'])
            }
            '<div class="'.$class.'" id="msg-flash" role="alert">' . $name . '
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span></button>
                     </div>';
        }*/

        echo 
                     '<div class="fixed z-10 inset-0 overflow-y-auto">
                     <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                       <!--
                         Background overlay, show/hide based on modal state.
                   
                         Entering: "ease-out duration-300"
                           From: "opacity-0"
                           To: "opacity-100"
                         Leaving: "ease-in duration-200"
                           From: "opacity-100"
                           To: "opacity-0"
                       -->
                       <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                         <div class="absolute inset-0 bg-secondary-100 opacity-75"></div>
                       </div>
                   
                       <!-- This element is to trick the browser into centering the modal contents. -->
                       <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                       <!--
                         Modal panel, show/hide based on modal state.
                   
                         Entering: "ease-out duration-300"
                           From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                           To: "opacity-100 translate-y-0 sm:scale-100"
                         Leaving: "ease-in duration-200"
                           From: "opacity-100 translate-y-0 sm:scale-100"
                           To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                       -->
                       <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                         <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                           <div class="sm:flex sm:items-start">
                             <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-primary-300 sm:mx-0 sm:h-10 sm:w-10">
                               <!-- Heroicon name: outline/exclamation -->
                               <svg class="h-6 w-6 text-primary-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                               </svg>
                             </div>
                             <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                               <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                 '. $name .'
                               </h3>
                               <div class="mt-2">
                                 <p class="text-sm text-gray-500"> '. $message .'
                                 </p>
                               </div>
                             </div>
                           </div>
                         </div>
                         <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                           <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary-300 text-base font-medium text-white hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-300 sm:ml-3 sm:w-auto sm:text-sm">
                             Okay
                           </button>
                        
                         </div>
                       </div>
                     </div>
                   </div>';

                     
    }


    function isLoggedIn(){
      if ( isset($_SESSION['user']['email']) && isset($_SESSION['user']['name'])) {
          return true;
      } else {
          return false;
      }
    }