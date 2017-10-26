</div>
<footer class="clearfix row <?php if($isWorkPage) echo "extra-padding" ?>">
    <div class="social">
        <ul style="margin-top:-4px;">
            <li>
                <a href="https://www.instagram.com/tavosu/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                        <path fill="#A8A8A6" fill-rule="evenodd" d="M18.747 16.757c0 1.097-.893 1.99-1.99 1.99H4.014a1.991 1.991 0 0 1-1.99-1.99V8.253h3.1a5.665 5.665 0 0 0-.416 2.132c0 3.13 2.546 5.68 5.678 5.68a5.686 5.686 0 0 0 5.68-5.68c0-.754-.152-1.473-.421-2.132h3.102v8.504zM7.422 8.253a3.654 3.654 0 0 1 2.964-1.525c1.22 0 2.3.605 2.964 1.525.433.6.692 1.337.692 2.132a3.66 3.66 0 0 1-3.656 3.655 3.659 3.659 0 0 1-3.655-3.655c0-.795.257-1.532.691-2.132zm10.487-5.86l.458-.001v3.52l-3.508.012-.012-3.52 3.062-.01zM16.757 0H4.014A4.018 4.018 0 0 0 0 4.014V16.757c0 2.213 1.8 4.013 4.014 4.013h12.743c2.213 0 4.015-1.8 4.015-4.013V4.013A4.019 4.019 0 0 0 16.757 0z"/>
                    </svg>                
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/tavosudesign/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="23" viewBox="0 0 11 23">
                        <path fill="#A8A8A6" fill-rule="evenodd" d="M10.271 11.507H7.048V23H2.272V11.507H0V7.449h2.272v-2.63C2.272 2.939 3.165 0 7.093 0l3.537.014v3.941H8.062c-.42 0-1.013.21-1.013 1.104v2.39h3.642l-.42 4.058z"/>
                    </svg>
                </a>
            </li>
        </ul>
        
    </div>
    <div class="copyright">
        All work by Tadas Vosylius © 2016
    </div>

</footer>
</div>

</div>
<div class="mobile-footer">
    <?php if (is_active_sidebar('sidebar_bottom')) : ?>
        <div class="sidebar-bottom widget-area" role="complementary">
            <ul>
                <?php dynamic_sidebar('sidebar_bottom'); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="copyright">
        © 2016 Tavosu. All rights reserved.
    </div>
</div>

</div>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.2.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvids.js"></script>
<script data-pin-hover="true" async defer src="//assets.pinterest.com/js/pinit.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
</html>