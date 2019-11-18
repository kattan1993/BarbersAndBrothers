<?php
/**
 * Created by PhpStorm.
 * User: mustafakattan
 * Date: 2019-10-23
 * Time: 21:06
 */
?>
<?php
$image = get_field('slider_image');
if( !empty( $image ) ): ?>
    <img class="wrap_top-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
<div>
    <?php
    $image = get_field('site_logo');
    if( !empty( $image ) ): ?>
        <a herft="">  <img class="wrap_top-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
    <?php endif; ?>
</div>
<?=
    wp_nav_menu(array(
        'theme_location' => 'menu-top',
        'menu_class' => '  menu-hover-lines'
    ));
?>
<div class="hero"></div>
<div class="svg-wrapper">
     <svg clsss="menu-under-line" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1390 99.5" style="enable-background:new 0 0 1390 99.5;" xml:space="preserve">
            <filter  filterUnits="objectBoundingBox" height="124.4%" id="filter-4" width="101.4%" x="-0.7%" y="-6.1%">
                <feMorphology  in="SourceAlpha" operator="erode" radius="1.5" result="shadowSpreadOuter1"></feMorphology>
                <feOffset  dx="0" dy="7" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
                <feGaussianBlur  in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="3.5"></feGaussianBlur>
                <feColorMatrix  in="shadowBlurOuter1" type="matrix" values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.201851223 0">
                </feColorMatrix>
            </filter>
            <g id="Page-1">
                <g id="DesktopHD_01" transform="translate(-25.000000, -690.000000)">
                    <g id="building" transform="translate(25.000000, 25.000000)">
                        <g id="Fill-1" transform="translate(0.000000, 665.000000)">
                            <defs>
                                <filter id="Adobe_OpacityMaskFilter" filterUnits="userSpaceOnUse" x="-9.7" y="-28" width="1409" height="112">
                                    <feColorMatrix  type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0"/>
                                </filter>
                            </defs>
                            <mask maskUnits="userSpaceOnUse" x="-9.7" y="-28" width="1409" height="112" id="mask-2_1_">
                                <g class="st0">
                                    <rect id="path-1_1_" y="1.5" class="st1" width="1390" height="90"/>
                                </g>
                            </mask>
                            <g transform="translate(695.000000, 21.000000) scale(-1, 1) translate(-695.000000, -21.000000) " class="st2">
                                <g class="st3">
                                    <path id="path-3_2_" d="M0-8v59.8c463.3,59.5,926.6-73.5,1390-14V-2.9C926.6-68.7,463.3,57.8,0-8"/>
                                </g>
                                <g>
                                    <path id="path-3_1_" class="st4" d="M0-0.8v52.6c463.3,59.5,926.6-73.5,1390-14V-0.5L0-0.8z"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
    </svg>
</div>

