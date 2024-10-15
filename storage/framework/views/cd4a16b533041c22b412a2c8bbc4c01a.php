<footer class="bg-white dark:bg-zinc-800 px-4 sm:px-6 lg:px-60 pt-20 pb-10 lg:pb-20 relative z-10">
    <div class="container mx-auto px-4">

        
        <div class="grid grid-cols-1 md:gap-x-6 gap-y-6 mb-10 lg:grid-cols-12 md:grid-cols-6 sm:grid-cols-2">

            
           <div class="col-span-4">

                
                

                
                

                <div class="font-bold text-sm text-gray-700 mb-4 uppercase dark:text-white tracking-widest">
                   Contact us
                </div>
                <ul>
					 <li class="block font-normal text-gray-400 mb-2">
                      <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="18" fill="gray" class="inline align-middle mr-2 text-gray-600"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>Pune, Maharashtra</p>
                    </li>
                    <li>
                       <a href="mailto:info@flunzo.com" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="gray" viewBox="0 0 512 512" class="inline align-middle mr-2 text-gray-600">
        <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/>
    </svg>
    info@flunzo.com
</a>
                    </li>
                </ul>


            </div>

            
             

            
            <div class="col-span-4">
                
                
                <div class="font-bold text-sm text-gray-700 mb-4 uppercase dark:text-white tracking-widest">
                    <?php echo e(__('messages.t_footer_column_3'), false); ?>

                </div>

                
                <?php if(count($pages)): ?>
                    <ul>
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page->column == 3): ?>
                                <li>
                                    <?php if($page->is_link && $page->link): ?>
                                        <a href="<?php echo e($page->link, false); ?>" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                                            <?php echo e($page->title, false); ?>

                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('page', $page->slug), false); ?>" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                                            <?php echo e($page->title, false); ?>

                                        </a>
                                    <?php endif; ?>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>

            </div>

            
            <div class="col-span-4">
                
                
                <div class="font-bold text-sm text-gray-700 mb-4 uppercase dark:text-white tracking-widest">
                    <?php echo e(__('messages.t_footer_column_4'), false); ?>

                </div>

                
                <?php if(count($pages)): ?>
                    <ul>
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page->column == 4): ?>
                                <li>
                                    <?php if($page->is_link && $page->link): ?>
                                        <a href="<?php echo e($page->link, false); ?>" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                                            <?php echo e($page->title, false); ?>

                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('page', $page->slug), false); ?>" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                                            <?php echo e($page->title, false); ?>

                                        </a>
                                    <?php endif; ?>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>

                <?php if(settings('footer')->is_language_switcher || settings('appearance')->is_dark_mode): ?>
                    <div class="mt-2 grid grid-cols-1 gap-y-4">
                        
                        
                        <?php if(settings('footer')->is_language_switcher): ?>

                            
                               

                            
                            <div id="change-footer-language-dropdown" class="z-10 hidden bg-white rounded-md border w-48 dark:bg-zinc-800 dark:border-zinc-700">
                                <ul class="text-gray-700 dark:text-gray-200">
                                    <?php $__currentLoopData = supported_languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li wire:key="footer-languages-id-<?php echo e($lang->language_code, false); ?>" <?php if($default_language_code !== $lang->language_code): ?> wire:click="setLocale('<?php echo e($lang->language_code, false); ?>')" <?php endif; ?> class="py-2.5 px-4 flex w-full items-center cursor-pointer justify-between <?php echo e($default_language_code === $lang->language_code ? 'bg-blue-50 text-blue-600 dark:bg-zinc-700 dark:text-white' : 'hover:bg-gray-50 dark:hover:bg-zinc-700', false); ?> focus:outline-none first:rounded-t-md last:rounded-b-md">
                                            <div class="inline-flex items-center">
                                                <img src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(url('public/img/flags/rounded/' . $lang->country_code . '.svg'), false); ?>" alt="<?php echo e($lang->name, false); ?>" class="lazy w-5 ltr:mr-3 rtl:ml-3">
                                                <span class="font-medium text-[13px] tracking-wide"><?php echo e($lang->name, false); ?></span>
                                            </div>
                                            <div wire:loading wire:target="setLocale('<?php echo e($lang->language_code, false); ?>')">
                                                <svg role="status" class="block w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/> <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/> </svg>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>

                        <?php endif; ?>
                        
                        
                        <?php if( settings('appearance')->is_theme_switcher && current_theme() === 'light' ): ?>
                            <button 
                                wire:click="switchTheme"
                                wire:loading.attr="disabled" 
                                class="inline-flex items-center px-2.5 py-2 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600  disabled:cursor-not-allowed max-w-fit">
        
                                
                                <div wire:loading wire:target="switchTheme">
                                    <svg role="status" class="w-4 h-4 ltr:mr-3 rtl:ml-3 block text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                    </svg>
                                </div>
        
                                
                                <div wire:loading.remove wire:target="switchTheme">
                                    <svg class="w-4 h-4 ltr:mr-3 rtl:ml-3" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M9.822 2.238a9 9 0 0 0 11.94 11.94C20.768 18.654 16.775 22 12 22 6.477 22 2 17.523 2 12c0-4.775 3.346-8.768 7.822-9.762zm8.342.053L19 2.5v1l-.836.209a2 2 0 0 0-1.455 1.455L16.5 6h-1l-.209-.836a2 2 0 0 0-1.455-1.455L13 3.5v-1l.836-.209A2 2 0 0 0 15.29.836L15.5 0h1l.209.836a2 2 0 0 0 1.455 1.455zm5 5L24 7.5v1l-.836.209a2 2 0 0 0-1.455 1.455L21.5 11h-1l-.209-.836a2 2 0 0 0-1.455-1.455L18 8.5v-1l.836-.209a2 2 0 0 0 1.455-1.455L20.5 5h1l.209.836a2 2 0 0 0 1.455 1.455z"></path></g></svg>
                                </div>
        
                                <span class="text-xs font-semibold text-gray-500 whitespace-nowrap"><?php echo app('translator')->get('messages.t_dark_mode'); ?></span>
        
                            </button>
                        <?php elseif( settings('appearance')->is_theme_switcher && current_theme() === 'dark' ): ?>
                            <button 
                                wire:click="switchTheme"
                                wire:loading.attr="disabled" 
                                class="inline-flex items-center px-2.5 py-2 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600  disabled:cursor-not-allowed dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 dark:focus:ring-offset-zinc-600 dark:hover:bg-zinc-800 max-w-fit">
        
                                
                                <div wire:loading wire:target="switchTheme">
                                    <svg role="status" class="w-4 h-4 ltr:mr-3 rtl:ml-3 block text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                    </svg>
                                </div>
        
                                
                                <div wire:loading.remove wire:target="switchTheme">
                                    <svg class="w-4 h-4 ltr:mr-3 rtl:ml-3" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636 5.636 7.05 3.515 4.93zM16.95 18.364l1.414-1.414 2.121 2.121-1.414 1.414-2.121-2.121zm2.121-14.85l1.414 1.415-2.121 2.121-1.414-1.414 2.121-2.121zM5.636 16.95l1.414 1.414-2.121 2.121-1.414-1.414 2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z"></path></g></svg>
                                </div>
        
                                <span class="text-xs font-semibold text-gray-300 whitespace-nowrap"><?php echo app('translator')->get('messages.t_light_mode'); ?></span>
        
                            </button>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

            </div>

        </div>
        
        <div class="grid md:flex justify-center md:justify-between items-center border-t-2 border-gray-50 dark:border-zinc-700 pt-4">

            
            <div class="flex items-center justify-center md:justify-items-start mb-4 md:mb-0">

                
                <div>
                    <a href="<?php echo e(url('/'), false); ?>" class="h-full">
                        <img src="<?php echo e(placeholder_img(), false); ?>" data-src="<?php echo e(src(settings('footer')->logo), false); ?>" alt="<?php echo e(settings('general')->title, false); ?>" class="lazy py-2.5 max-h-20 w-auto" height="<?php echo e(settings('appearance')->sizes['header_desktop_logo_height'], false); ?>" width="150">
                    </a>
                </div>

            </div>

            
            <div>
                <div class="flex items-center space-x-2 rtl:space-x-reverse flex flex-wrap">

                    
                    <?php if(settings('footer')->social_facebook): ?>
                        <a href="<?php echo e(settings('footer')->social_facebook, false); ?>" target="_blank" data-tooltip-target="tooltip-follow-us-facebook" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group rtl:ml-2 mt-2">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30"> <path d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"></path></svg>
                        </a>
                        <div id="tooltip-follow-us-facebook" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('messages.t_follow_us_on_facebook'), false); ?>

                        </div>
                    <?php endif; ?>
    
                    
                    <?php if(settings('footer')->social_twitter): ?>
                        <a href="<?php echo e(settings('footer')->social_twitter, false); ?>" target="_blank" data-tooltip-target="tooltip-follow-us-twitter" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group mt-2">
                               <svg class="fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" width="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#1DA1F2"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                        </a>
                        <div id="tooltip-follow-us-twitter" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('messages.t_follow_us_on_twitter'), false); ?>

                        </div>
                    <?php endif; ?>

                    
                    <?php if(settings('footer')->social_instagram): ?>
                        <a href="<?php echo e(settings('footer')->social_instagram, false); ?>" target="_blank" data-tooltip-target="tooltip-follow-us-instagram" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group mt-2">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30"> <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path></svg>
                        </a>
                        <div id="tooltip-follow-us-instagram" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('messages.t_follow_us_on_instagram'), false); ?>

                        </div>
                    <?php endif; ?>

                    
                    <?php if(settings('footer')->social_pinterest): ?>
                        <a href="<?php echo e(settings('footer')->social_pinterest, false); ?>" target="_blank" data-tooltip-target="tooltip-follow-us-pinterest" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group mt-2">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30"> <path d="M15,3C8.373,3,3,8.373,3,15c0,5.084,3.163,9.426,7.627,11.174c-0.105-0.949-0.2-2.406,0.042-3.442 c0.218-0.936,1.407-5.965,1.407-5.965s-0.359-0.719-0.359-1.781c0-1.669,0.967-2.914,2.171-2.914c1.024,0,1.518,0.769,1.518,1.69 c0,1.03-0.655,2.569-0.994,3.995c-0.283,1.195,0.599,2.169,1.777,2.169c2.133,0,3.772-2.249,3.772-5.495 c0-2.873-2.064-4.882-5.012-4.882c-3.414,0-5.418,2.561-5.418,5.208c0,1.031,0.397,2.137,0.893,2.739 c0.098,0.119,0.112,0.223,0.083,0.344c-0.091,0.379-0.293,1.194-0.333,1.361c-0.052,0.22-0.174,0.266-0.401,0.16 c-1.499-0.698-2.436-2.889-2.436-4.649c0-3.785,2.75-7.262,7.929-7.262c4.163,0,7.398,2.966,7.398,6.931 c0,4.136-2.608,7.464-6.227,7.464c-1.216,0-2.359-0.632-2.75-1.378c0,0-0.602,2.291-0.748,2.853 c-0.271,1.042-1.002,2.349-1.492,3.146C12.57,26.812,13.763,27,15,27c6.627,0,12-5.373,12-12S21.627,3,15,3z"></path></svg>
                        </a>
                        <div id="tooltip-follow-us-pinterest" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('messages.t_follow_us_on_pinterest'), false); ?>

                        </div>
                    <?php endif; ?>

                    
                    <?php if(settings('footer')->social_linkedin): ?>
                        <a href="<?php echo e(settings('footer')->social_linkedin, false); ?>" target="_blank" data-tooltip-target="tooltip-follow-us-linkedin" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group mt-2">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30"> <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"></path></svg>
                        </a>
                        <div id="tooltip-follow-us-linkedin" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('messages.t_follow_us_on_linkedin'), false); ?>

                        </div>
                    <?php endif; ?>

                    
                    <?php if(settings('footer')->social_github): ?>
                        <a href="<?php echo e(settings('footer')->social_github, false); ?>" target="_blank" data-tooltip-target="tooltip-follow-us-github" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group mt-2">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-gray-800" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30"> <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path></svg>
                        </a>
                        <div id="tooltip-follow-us-github" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('messages.t_follow_us_on_github'), false); ?>

                        </div>
                    <?php endif; ?>

                    
                    <?php if(settings('footer')->social_youtube): ?>
                        <a href="<?php echo e(settings('footer')->social_youtube, false); ?>" target="_blank" data-tooltip-target="tooltip-follow-us-youtube" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group mt-2">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 30 30"> <path d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path></svg>
                        </a>
                        <div id="tooltip-follow-us-youtube" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('messages.t_follow_us_on_youtube'), false); ?>

                        </div>
                    <?php endif; ?>
					
					<a href="https://www.reddit.com/user/1XLUniverse/" target="_blank" data-tooltip-target="tooltip-follow-us-reddit" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group rtl:ml-2 mt-2">
                        <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="25" x="0px" y="0px"><path d="M64 32l320 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96C0 60.7 28.7 32 64 32zM305.9 166.4c20.6 0 37.3-16.7 37.3-37.3s-16.7-37.3-37.3-37.3c-18 0-33.1 12.8-36.6 29.8c-30.2 3.2-53.8 28.8-53.8 59.9l0 .2c-32.8 1.4-62.8 10.7-86.6 25.5c-8.8-6.8-19.9-10.9-32-10.9c-28.9 0-52.3 23.4-52.3 52.3c0 21 12.3 39 30.1 47.4c1.7 60.7 67.9 109.6 149.3 109.6s147.6-48.9 149.3-109.7c17.7-8.4 29.9-26.4 29.9-47.3c0-28.9-23.4-52.3-52.3-52.3c-12 0-23 4-31.9 10.8c-24-14.9-54.3-24.2-87.5-25.4l0-.1c0-22.2 16.5-40.7 37.9-43.7l0 0c3.9 16.5 18.7 28.7 36.3 28.7zM155 248.1c14.6 0 25.8 15.4 25 34.4s-11.8 25.9-26.5 25.9s-27.5-7.7-26.6-26.7s13.5-33.5 28.1-33.5zm166.4 33.5c.9 19-12 26.7-26.6 26.7s-25.6-6.9-26.5-25.9c-.9-19 10.3-34.4 25-34.4s27.3 14.6 28.1 33.5zm-42.1 49.6c-9 21.5-30.3 36.7-55.1 36.7s-46.1-15.1-55.1-36.7c-1.1-2.6 .7-5.4 3.4-5.7c16.1-1.6 33.5-2.5 51.7-2.5s35.6 .9 51.7 2.5c2.7 .3 4.5 3.1 3.4 5.7z"/></svg>
                    </a>
                    <div id="tooltip-follow-us-reddit" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <?php echo e(__('Follow us on reddit'), false); ?>

                    </div>
					
					  <a href="https://www.quora.com/profile/1XLUniverse/" target="_blank" data-tooltip-target="tooltip-follow-us-quora" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group rtl:ml-2 mt-2">
                        <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="25" height="25" fill="#1DA1F2"><path d="M440.5 386.7h-29.3c-1.5 13.5-10.5 30.8-33 30.8-20.5 0-35.3-14.2-49.5-35.8 44.2-34.2 74.7-87.5 74.7-153C403.5 111.2 306.8 32 205 32 105.3 32 7.3 111.7 7.3 228.7c0 134.1 131.3 221.6 249 189C276 451.3 302 480 351.5 480c81.8 0 90.8-75.3 89-93.3zM297 329.2C277.5 300 253.3 277 205.5 277c-30.5 0-54.3 10-69 22.8l12.2 24.3c6.2-3 13-4 19.8-4 35.5 0 53.7 30.8 69.2 61.3-10 3-20.7 4.2-32.7 4.2-75 0-107.5-53-107.5-156.7C97.5 124.5 130 71 205 71c76.2 0 108.7 53.5 108.7 157.7 .1 41.8-5.4 75.6-16.7 100.5z"/></svg>

                    </a>
                    <div id="tooltip-follow-us-quora" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <?php echo e(__('Follow us on quora'), false); ?>

                    </div>
					
					  <a href="https://www.discord.com/channels/@1XLUniverse/" target="_blank" data-tooltip-target="tooltip-follow-us-discord" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group rtl:ml-2 mt-2">
                      
                        <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" ><path d="M524.5 69.8a1.5 1.5 0 0 0 -.8-.7A485.1 485.1 0 0 0 404.1 32a1.8 1.8 0 0 0 -1.9 .9 337.5 337.5 0 0 0 -14.9 30.6 447.8 447.8 0 0 0 -134.4 0 309.5 309.5 0 0 0 -15.1-30.6 1.9 1.9 0 0 0 -1.9-.9A483.7 483.7 0 0 0 116.1 69.1a1.7 1.7 0 0 0 -.8 .7C39.1 183.7 18.2 294.7 28.4 404.4a2 2 0 0 0 .8 1.4A487.7 487.7 0 0 0 176 479.9a1.9 1.9 0 0 0 2.1-.7A348.2 348.2 0 0 0 208.1 430.4a1.9 1.9 0 0 0 -1-2.6 321.2 321.2 0 0 1 -45.9-21.9 1.9 1.9 0 0 1 -.2-3.1c3.1-2.3 6.2-4.7 9.1-7.1a1.8 1.8 0 0 1 1.9-.3c96.2 43.9 200.4 43.9 295.5 0a1.8 1.8 0 0 1 1.9 .2c2.9 2.4 6 4.9 9.1 7.2a1.9 1.9 0 0 1 -.2 3.1 301.4 301.4 0 0 1 -45.9 21.8 1.9 1.9 0 0 0 -1 2.6 391.1 391.1 0 0 0 30 48.8 1.9 1.9 0 0 0 2.1 .7A486 486 0 0 0 610.7 405.7a1.9 1.9 0 0 0 .8-1.4C623.7 277.6 590.9 167.5 524.5 69.8zM222.5 337.6c-29 0-52.8-26.6-52.8-59.2S193.1 219.1 222.5 219.1c29.7 0 53.3 26.8 52.8 59.2C275.3 311 251.9 337.6 222.5 337.6zm195.4 0c-29 0-52.8-26.6-52.8-59.2S388.4 219.1 417.9 219.1c29.7 0 53.3 26.8 52.8 59.2C470.7 311 447.5 337.6 417.9 337.6z"/></svg>                                        </a>

                    <div id="tooltip-follow-us-discord" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <?php echo e(__('Follow us on discord'), false); ?>

                    </div>
				
				  <a href="https://whatsapp.com/channel/0029VaLoJ1SLCoX4iyiW0R0c" target="_blank" data-tooltip-target="tooltip-follow-us-whatsapp" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group rtl:ml-2 mt-2">
                      
							  <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>                                        </a>
                    
                    <div id="tooltip-follow-us-whatsapp" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <?php echo e(__('Follow us on whatsapp'), false); ?>

                    </div>
					
					     <a href="https://www.threads.net/@1XLUniverse/" target="_blank" data-tooltip-target="tooltip-follow-us-threads" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group rtl:ml-2 mt-2">
                            <svg class="h-6 w-6 fill-gray-500 dark:fill-gray-300 group-hover:fill-[#1DA1F2]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M331.5 235.7c2.2 .9 4.2 1.9 6.3 2.8c29.2 14.1 50.6 35.2 61.8 61.4c15.7 36.5 17.2 95.8-30.3 143.2c-36.2 36.2-80.3 52.5-142.6 53h-.3c-70.2-.5-124.1-24.1-160.4-70.2c-32.3-41-48.9-98.1-49.5-169.6V256v-.2C17 184.3 33.6 127.2 65.9 86.2C102.2 40.1 156.2 16.5 226.4 16h.3c70.3 .5 124.9 24 162.3 69.9c18.4 22.7 32 50 40.6 81.7l-40.4 10.8c-7.1-25.8-17.8-47.8-32.2-65.4c-29.2-35.8-73-54.2-130.5-54.6c-57 .5-100.1 18.8-128.2 54.4C72.1 146.1 58.5 194.3 58 256c.5 61.7 14.1 109.9 40.3 143.3c28 35.6 71.2 53.9 128.2 54.4c51.4-.4 85.4-12.6 113.7-40.9c32.3-32.2 31.7-71.8 21.4-95.9c-6.1-14.2-17.1-26-31.9-34.9c-3.7 26.9-11.8 48.3-24.7 64.8c-17.1 21.8-41.4 33.6-72.7 35.3c-23.6 1.3-46.3-4.4-63.9-16c-20.8-13.8-33-34.8-34.3-59.3c-2.5-48.3 35.7-83 95.2-86.4c21.1-1.2 40.9-.3 59.2 2.8c-2.4-14.8-7.3-26.6-14.6-35.2c-10-11.7-25.6-17.7-46.2-17.8H227c-16.6 0-39 4.6-53.3 26.3l-34.4-23.6c19.2-29.1 50.3-45.1 87.8-45.1h.8c62.6 .4 99.9 39.5 103.7 107.7l-.2 .2zm-156 68.8c1.3 25.1 28.4 36.8 54.6 35.3c25.6-1.4 54.6-11.4 59.5-73.2c-13.2-2.9-27.8-4.4-43.4-4.4c-4.8 0-9.6 .1-14.4 .4c-42.9 2.4-57.2 23.2-56.2 41.8l-.1 .1z"/></svg>
                        </a>
                        <div id="tooltip-follow-us-threads" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            <?php echo e(__('Follow us on threads'), false); ?>

                        </div>

                </div>
            </div>

        </div>

        
        <div class="text-center mt-10">
                
            
            <div class="text-gray-400 dark:text-gray-200 font-normal text-sm mb-2">
                <?php echo settings('footer')->copyrights; ?>

            </div>

            
            <div class="flex space-x-4 justify-center rtl:space-x-reverse">

                
                <a href="<?php echo e(url('help/contact'), false); ?>" class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline"><?php echo e(__('messages.t_contact_us'), false); ?></a>

                
                <?php if(settings('footer')->privacy): ?>
                    <a href="<?php echo e(url('page', settings('footer')->privacy->slug), false); ?>" class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline"><?php echo e(__('messages.t_privacy_policy'), false); ?></a>
                <?php endif; ?>

                
                <?php if(settings('footer')->terms): ?>
                    <a href="<?php echo e(url('page', settings('footer')->terms->slug), false); ?>" class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline">Terms and Conditions</a>
                <?php endif; ?>

                
                

            </div>

        </div>

    </div>

</footer><?php /**PATH /var/www/vhosts/flunzo.com/httpdocs/in/resources/views/livewire/main/includes/footer.blade.php ENDPATH**/ ?>