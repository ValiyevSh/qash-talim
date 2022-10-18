<?php

use backend\modules\menumanager\models\Menu;

$main_menu = Menu::getMenu('menus');
$menus = $main_menu->activeSubMenus;
?>


<div class="menu-bar">
    <div class="my-container">
        <div class="bar-in">
            <ul class="menu">
                <?php foreach ($menus as $menu): ?>
                    <?php $subMenus = $menu->activeSubMenus; ?>
                    <li class="dropdown menu-in">
                        <a class="txt-18 m-in dropdown-toggle menu-in-in" type="button"
                           aria-expanded="false" <?php if (!empty($subMenus)): ?> data-bs-toggle="dropdown" <?php else: ?> href="<?= $menu->url; ?>" <?php endif; ?>>
                            <?php if (!(empty($subMenus))): ?>
                                <svg class="chervon" width="10" height="6" viewBox="0 0 10 6" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M9.5303 0.469668C9.8232 0.762558 9.8232 1.23744 9.5303 1.5303L5.5303 5.5303C5.2374 5.8232 4.7626 5.8232 4.4697 5.5303L0.469668 1.5303C0.176777 1.23744 0.176777 0.762558 0.469668 0.469668C0.762558 0.176777 1.23744 0.176777 1.53033 0.469668L5 3.9393L8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668Z"
                                          fill="white"/>
                                </svg>
                            <?php else: ?>
                            <?php endif; ?>
                            <span class="txt-16">
                                <?= $menu->title; ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu menu-in-menu">
                            <?php foreach ($subMenus as $subMenu): ?>
                                <?php $smallMenus = $subMenu->activeSubMenus; ?>
                                <?php if (empty($smallMenus)): ?>
                                    <li><a class="dropdown-item txt-16"
                                           href="<?= $subMenu->url ?>"><?= $subMenu->title; ?></a></li>
                                <?php else: ?>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item txt-16" href="#"><?= $subMenu->title ?>
                                            <svg class="carret" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M8.35947 5.34684C7.88018 5.8093 7.88018 6.55912 8.35947 7.02158L14.037 12.5L8.35947 17.9785C7.88018 18.441 7.88018 19.1907 8.35947 19.6531C8.83876 20.1156 9.61571 20.1156 10.095 19.6531L16.6405 13.3373C17.1198 12.8749 17.1198 12.1252 16.6405 11.6627L10.095 5.34684C9.61571 4.88439 8.83876 4.88439 8.35947 5.34684Z"
                                                      fill="#000"/>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu menu-in-menu">
                                            <?php foreach ($smallMenus as $smallMenu): ?>
                                                <li><a class="dropdown-item txt-16" href="<?=$smallMenu->url;?>"><?=$smallMenu->title;?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="right-menu-bar">
                <div class="blog-k">
                    <div class="language dropdown">
                        <button class="dropdown-toggle language-in" type="button" id="dropdownMenuClickableInside"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <a class="phone glavni-btn">
                                <svg class="rot" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8.77734 12.2844C8.77734 10.2134 10.4563 8.53442 12.5273 8.53442C14.5984 8.53442 16.2773 10.2134 16.2773 12.2844C16.2773 14.3555 14.5984 16.0344 12.5273 16.0344C10.4563 16.0344 8.77734 14.3555 8.77734 12.2844ZM12.5273 10.0344C11.2847 10.0344 10.2773 11.0418 10.2773 12.2844C10.2773 13.527 11.2847 14.5344 12.5273 14.5344C13.7699 14.5344 14.7773 13.527 14.7773 12.2844C14.7773 11.0418 13.7699 10.0344 12.5273 10.0344Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M4.85077 10.9308C4.43165 11.5347 4.27734 12.0071 4.27734 12.2844C4.27734 12.5617 4.43165 13.0341 4.85077 13.638C5.25591 14.2218 5.85812 14.8547 6.62001 15.4394C8.14712 16.6115 10.2408 17.5344 12.5273 17.5344C14.8138 17.5344 16.9075 16.6115 18.4346 15.4394C19.1965 14.8547 19.7987 14.2218 20.2039 13.638C20.623 13.0341 20.7773 12.5617 20.7773 12.2844C20.7773 12.0071 20.623 11.5347 20.2039 10.9308C19.7987 10.347 19.1965 9.71414 18.4346 9.12939C16.9075 7.95734 14.8138 7.03442 12.5273 7.03442C10.2408 7.03442 8.14712 7.95734 6.62001 9.12939C5.85812 9.71414 5.25591 10.347 4.85077 10.9308ZM5.70675 7.93945C7.43699 6.6115 9.84332 5.53442 12.5273 5.53442C15.2113 5.53442 17.6176 6.6115 19.3479 7.93945C20.2147 8.6047 20.9305 9.34686 21.4362 10.0756C21.9279 10.7841 22.2773 11.5617 22.2773 12.2844C22.2773 13.0071 21.9279 13.7847 21.4362 14.4933C20.9305 15.222 20.2147 15.9641 19.3479 16.6294C17.6176 17.9573 15.2113 19.0344 12.5273 19.0344C9.84332 19.0344 7.43699 17.9573 5.70675 16.6294C4.83996 15.9641 4.12415 15.222 3.61844 14.4933C3.12671 13.7847 2.77734 13.0071 2.77734 12.2844C2.77734 11.5617 3.12671 10.7841 3.61844 10.0756C4.12415 9.34686 4.83996 8.6047 5.70675 7.93945Z"
                                          fill="white"/>
                                </svg>
                            </a>
                        </button>
                        <ul class="dropdown-menu menu-in dropdown-menu-end"
                            aria-labelledby="dropdownMenuClickableInside">
                            <p class="txt-16">Ko'rinishi</p>
                            <div class="bottom">
                                <div class="blog-color">
                                    <a id="normal" class="phone glavni-btn">
                                    </a>
                                    <p class="txt-12">Normal</p>
                                </div>
                                <div class="blog-color">
                                    <a id="gray" class="phone glavni-btn">
                                    </a>
                                    <p class="txt-12">Gray</p>
                                </div>
                                <div class="blog-color">
                                    <a id="mode" mode class="phone glavni-btn">
                                    </a>
                                    <p class="txt-12">Dark</p>
                                </div>
                                <div class="blog-color">
                                    <a id="image" class="phone glavni-btn">
                                        <svg width="32" height="31" viewBox="0 0 32 31" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M18.8242 11.625C18.8242 10.5549 19.6917 9.6875 20.7617 9.6875C21.8317 9.6875 22.6992 10.5549 22.6992 11.625C22.6992 12.6951 21.8317 13.5625 20.7617 13.5625C19.6917 13.5625 18.8242 12.6951 18.8242 11.625Z"
                                                    fill="black"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M24.6773 24.7636L22.904 22.9902L22.1873 23.0525C18.2314 23.3963 14.2531 23.3963 10.2973 23.0525L8.34656 22.8829C7.37222 22.7981 6.58289 22.0567 6.43746 21.0895C6.34117 20.4492 6.26152 19.8072 6.19852 19.1638L11.6799 13.6823L16.164 18.7269C16.4215 19.0165 16.8267 19.1249 17.1945 19.0023L18.4857 18.5719L11.3083 11.3945C11.2083 11.4417 11.1162 11.506 11.0364 11.5858L6.03525 16.5869C5.97074 14.3568 6.10481 12.1225 6.43746 9.91033C6.569 9.0356 7.22726 8.3455 8.07274 8.15895L6.58311 6.66932C5.49897 7.26342 4.71444 8.33914 4.5215 9.62223C3.93554 13.5188 3.93554 17.4811 4.5215 21.3777C4.80011 23.2305 6.31222 24.6508 8.17877 24.8131L10.1295 24.9826C14.197 25.3363 18.2875 25.3363 22.3551 24.9826L24.3057 24.8131C24.4313 24.8022 24.5553 24.7856 24.6773 24.7636ZM11.4833 5.91268C15.1039 5.66803 18.7385 5.70289 22.3551 6.01726L24.3057 6.18683C26.1723 6.34909 27.6845 7.76947 27.9631 9.62223C28.549 13.5188 28.549 17.4811 27.9631 21.3777C27.921 21.6575 27.8508 21.9275 27.7555 22.1848L26.1238 20.5531C26.603 17.0208 26.5774 13.4373 26.047 9.91033C25.9016 8.9432 25.1123 8.20175 24.138 8.11706L22.1873 7.94749C19.2386 7.69116 16.2774 7.6259 13.3224 7.75171L11.4833 5.91268Z"
                                                  fill="black"/>
                                            <path d="M6.24219 3L28.2422 25.5" stroke="black" stroke-width="2"
                                                  stroke-linecap="round"/>
                                        </svg>
                                    </a>
                                    <p class="txt-12">No image</p>
                                </div>
                            </div>
                            <p class="txt-16 katta">Shrift o’lchami</p>

                            <p class="txt-12">
                                <output class="txt-12">0</output>
                                %ga kattaroq
                            </p>
                            <input class="none cah" type="range" min="11" max="15" value="11" id="slider">
                        </ul>
                    </div>

                </div>
                <a class="phone glavni-btn mod" href="#">
                    <svg class="poisk" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.1801 16.5942C11.6463 19.4245 6.47377 19.2017 3.19805 15.926C-0.316668 12.4113 -0.316668 6.71283 3.19805 3.19811C6.71277 -0.316607 12.4113 -0.316607 15.9259 3.19811C19.2017 6.47382 19.4245 11.6464 16.5942 15.1801L23.4685 22.0542C23.859 22.4448 23.859 23.078 23.4685 23.4685C23.0779 23.859 22.4447 23.859 22.0542 23.4685L15.1801 16.5942ZM4.61226 14.5118C1.8786 11.7781 1.8786 7.34599 4.61226 4.61233C7.34594 1.87866 11.7781 1.87866 14.5118 4.61233C17.2434 7.34399 17.2454 11.7716 14.5178 14.5058C14.5158 14.5078 14.5138 14.5097 14.5117 14.5118C14.5097 14.5138 14.5077 14.5158 14.5058 14.5178C11.7715 17.2454 7.34393 17.2434 4.61226 14.5118Z"
                              fill="white"/>
                    </svg>
                </a>

            </div>
        </div>
    </div>
</div>
