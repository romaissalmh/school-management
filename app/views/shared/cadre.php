<!-- template for the cadre -->
<div class="card hover:shadow-lg mb-4 ">
    <img class="w-full h-32 sm:h-48 object-cover" src="<?php echo $image_url; ?>" alt="">
    <div class="m-4">
        <span class="font-bold"> <?php echo $title; ?> </span>
        <span class="block text-gray-500 text-sm line-clamp-3"> <?php echo $description; ?> </span>
    </div>
    <div class="flex justify-center my-4 ">
        <a href="<?php echo $link; ?>"  class="btn w-2/4  bg-primary-300 hover:bg-primary-200 border border-transparent focus:ring-primary-300; text-lg"><?php echo $button; ?></a>
    </div>
</div>


<!-- <span class="absolute right-0 inset-y-0 flex items-center pr-3">

                <svg class="<?php echo $hidden; ?> h-5 w-5 text-secondary-200 group-hover:text-secondary-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill="white" d="M14 15.5V12H1V8h13V4.5l5.25 5.5L14 15.5z" />
                </svg>
            </span> --->