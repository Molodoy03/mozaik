<footer class="wow fadeIn">
    <div class="container wide">
        <div class="section-wrapper">
            <div class="top-holder">
                <?php if (has_nav_menu('footer_menu')) { ?>
                    <div class="f-menu">
                        <?php wp_nav_menu(['theme_location' => 'footer_menu', 'container' => '']); ?>
                    </div>
                <?php } ?>

                <?php if (have_rows('social_media', 'option')) : ?>
                    <div class="f-socials">
                        <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                            <?php
                            $facebook = get_sub_field('facebook');
                            $twitter = get_sub_field('twitter');
                            $linkedin = get_sub_field('linkedin');

                            if ($facebook) { ?>
                                <a href="<?php echo $facebook; ?>">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="96.124px" height="96.123px" viewBox="0 0 96.124 96.123"
                                         style="enable-background:new 0 0 96.124 96.123; fill:rgb(0,84,143)"
                                         xml:space="preserve">
                                        <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803
                                            c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654
                                            c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246
                                            c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"/>
                                    </svg>
                                </a>
                            <?php }
                            if ($twitter) { ?>
                                <a href="<?php echo $twitter; ?>">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 29.267 29.267"
                                         style="fill:rgb(0,84,143); enable-background:new 0 0 29.267 29.267;"
                                         xml:space="preserve">
                                        <path d="M25.925,13.574c0.405,0.173,0.928,0.295,1.571,0.366c0.295,0.025,0.579,0.036,0.86,0.036c0.326,0,0.632-0.018,0.911-0.054
                                            c-0.351,0.329-0.803,0.614-1.349,0.857c-0.552,0.244-1.262,0.365-2.138,0.365c-0.401,1.498-1.144,2.844-2.23,4.028
                                            c-1.082,1.188-2.37,2.169-3.862,2.943s-3.131,1.312-4.926,1.617c-1.01,0.182-2.019,0.272-3.033,0.272
                                            c-0.765,0-1.533-0.055-2.297-0.164c-1.771-0.23-3.472-0.77-5.118-1.617C2.669,21.378,1.232,20.169,0,18.599
                                            c0.696,0.62,1.508,1.101,2.433,1.435c0.925,0.333,1.886,0.503,2.884,0.503c0.999,0,1.981-0.183,2.944-0.54
                                            c0.96-0.358,1.824-0.917,2.594-1.672c-0.146,0.023-0.292,0.036-0.441,0.036c-0.279,0-0.534-0.049-0.764-0.146
                                            c-0.367-0.146-0.62-0.345-0.757-0.594c-0.142-0.249-0.142-0.524,0-0.823C9.03,16.5,9.386,16.236,9.96,16.006
                                            c-0.196,0.021-0.387,0.034-0.566,0.034c-0.283,0-0.544-0.024-0.783-0.07c-0.406-0.075-0.754-0.2-1.052-0.375
                                            c-0.303-0.179-0.547-0.37-0.743-0.577c-0.194-0.208-0.359-0.429-0.494-0.66c0.246-0.219,0.518-0.386,0.823-0.499
                                            c0.305-0.116,0.706-0.188,1.205-0.211c-1.118-0.243-1.917-0.606-2.391-1.078c-0.475-0.475-0.777-1.022-0.895-1.643
                                            c0.33-0.051,0.657-0.108,0.994-0.174c0.333-0.069,0.6-0.076,0.796-0.029C5.901,10.249,5.24,9.695,4.86,9.062
                                            C4.533,8.503,4.368,7.977,4.368,7.49c0-0.061,0.006-0.127,0.019-0.201C6.104,7.887,7.55,8.436,8.724,8.933
                                            c1.177,0.501,2.221,0.988,3.134,1.465c0.353,0.142,0.704,0.361,1.06,0.655l1.151,0.989c0.245-0.648,0.521-1.289,0.837-1.929
                                            c0.321-0.641,0.658-1.253,1.017-1.837c0.359-0.583,0.762-1.121,1.213-1.608c0.451-0.485,0.964-0.885,1.534-1.205
                                            c-0.023,0.278-0.167,0.555-0.436,0.822c0.33-0.278,0.685-0.503,1.067-0.677c0.387-0.17,0.792-0.283,1.216-0.345
                                            c-0.049,0.28-0.248,0.51-0.604,0.685c-0.353,0.177-0.661,0.314-0.93,0.41c0.096-0.023,0.29-0.087,0.574-0.189
                                            c0.287-0.104,0.592-0.2,0.915-0.283c0.326-0.086,0.615-0.144,0.879-0.164c0.26-0.025,0.417,0.021,0.464,0.145
                                            c0.072,0.146,0.03,0.271-0.127,0.374c-0.157,0.104-0.351,0.19-0.577,0.267C20.889,6.58,20.66,6.639,20.438,6.69
                                            c-0.227,0.05-0.375,0.086-0.447,0.108l-0.677,0.237c0.133-0.013,0.268-0.018,0.401-0.018c0.559,0,1.11,0.084,1.644,0.255
                                            c0.659,0.208,1.262,0.525,1.81,0.953c0.546,0.423,1.029,0.924,1.441,1.497c0.414,0.573,0.719,1.187,0.914,1.844l0.074,0.293
                                            c0.021,0.097,0.048,0.205,0.072,0.326c0.244,0.076,0.535,0.12,0.879,0.139c0.34,0.017,0.677,0,1.014-0.055
                                            c0.332-0.054,0.637-0.123,0.909-0.209c0.276-0.085,0.494-0.165,0.651-0.237c-0.194,0.476-0.569,0.874-1.124,1.196
                                            C27.442,13.339,26.75,13.524,25.925,13.574z"/>
                                    </svg>
                                </a>
                            <?php }
                            if ($linkedin) { ?>
                                <a href="<?php echo $linkedin; ?>">
                                    <svg style="fill:rgb(0,84,143)" viewBox="-28 0 512 512.00098" xmlns="http://www.w3.org/2000/svg"><path d="m401.046875 189.761719c-20.632813-17.222657-46.851563-26.433594-73.832031-25.933594-16.75.308594-33.117188 4.347656-47.949219 11.660156v-7.101562c0-9.242188-7.519531-16.757813-16.757813-16.757813h-87.882812c-9.242188 0-16.757812 7.515625-16.757812 16.757813v326.855469c0 9.242187 7.519531 16.757812 16.757812 16.757812h89.621094c8.292968 0 15.019531-6.726562 15.019531-15.019531v-195.53125c0-16.90625 13.753906-30.65625 30.65625-30.65625 16.90625 0 30.65625 13.75 30.65625 30.65625v195.527343c0 8.296876 6.726563 15.023438 15.023437 15.023438h85.496094c8.296875 0 15.023438-6.726562 15.023438-15.023438v-189.570312c0-45.546875-20.074219-88.429688-55.074219-117.644531zm0 0"/><path d="m104.359375 151.625h-86.3125c-9.675781 0-17.546875 7.871094-17.546875 17.546875v325.285156c0 9.671875 7.871094 17.542969 17.546875 17.542969h86.3125c9.671875 0 17.542969-7.871094 17.542969-17.542969v-325.285156c0-9.675781-7.871094-17.546875-17.542969-17.546875zm0 0"/><path d="m61.203125 0c-33.75 0-61.203125 27.453125-61.203125 61.199219 0 33.75 27.453125 61.203125 61.203125 61.203125 33.742187 0 61.199219-27.453125 61.199219-61.203125 0-33.746094-27.453125-61.199219-61.199219-61.199219zm0 0"/></svg>
                                </a>
                            <?php }
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="bottom-holder">
                <?php if (have_rows('contact_group', 'option')) : ?>
                    <?php while (have_rows('contact_group', 'option')) : the_row(); ?>
                        <?php
                        $logo = get_sub_field('logo');
                        $address_line_1 = get_sub_field('address_line_1');
                        $address_line_2 = get_sub_field('address_line_2');
                        $phone = get_sub_field('phone');

                        if ($logo) { ?>
                            <div class="f-logo">
                                <?php echo wp_get_attachment_image($logo, 'm_logo'); ?>
                            </div>
                        <?php }
                        if ($address_line_1) { ?>
                            <div class="address">
                                <?php echo $address_line_1; ?>
                            </div>
                        <?php }
                        if ($address_line_2) { ?>
                            <div class="address">
                                <?php echo $address_line_2; ?>
                            </div>
                        <?php }
                        if ($phone) { ?>
                            <div class="phone">
                                <a href="<?php echo $phone; ?>"><?php echo $phone; ?></a>
                            </div>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('copyright_group', 'option')) : ?>
                    <div class="copyrights-holder">
                        <?php while (have_rows('copyright_group', 'option')) : the_row();
                            $copyright = get_sub_field('copyright');
                            if ($copyright) { ?>
                                <div class="copyright">
                                    <?php echo $copyright; ?>
                                </div>
                            <?php }
                            if (have_rows('links')) : ?>
                                <div class="links">
                                    <?php while (have_rows('links')) : the_row();
                                        $link = get_sub_field('link');
                                        if ($link) { ?>
                                            <a href="<?php echo $link['url']; ?>"
                                               target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                        <?php }
                                    endwhile; ?>
                                </div>
                            <?php
                            endif;
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</div><!-- .wrapper -->
</body>
</html>
