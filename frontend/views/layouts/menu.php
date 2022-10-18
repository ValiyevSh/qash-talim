<?php
use backend\modules\menumanager\models\Menu;
use yii\helpers\Url;

$main_menu = Menu::getMenu('main_menu');
$menus = $main_menu->activeSubMenus;
$language = Yii::$app->language;

?>

<div class="menu-l">
    <div class="top">
        <div class="main-page-in">
            <div class="left-in">
                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M2.96246 8.548C5.30948 13.4392 9.48597 17.328 14.6778 19.4351L14.6942 19.4417L15.6972 19.8696C16.9745 20.4142 18.4757 20.0274 19.2946 18.9427L20.968 16.7261C21.0702 16.5907 21.0438 16.4025 20.908 16.2975L17.9867 14.0418C17.8414 13.9297 17.6278 13.9559 17.5167 14.0993L16.3798 15.5677C16.1036 15.9244 15.6049 16.0483 15.1824 15.8653C11.3002 14.1837 8.18052 11.198 6.42361 7.48244C6.23239 7.07805 6.36187 6.60079 6.73447 6.33651L8.26873 5.24831C8.41866 5.14197 8.44596 4.93759 8.32877 4.79859L5.97161 2.0022C5.86206 1.87222 5.66542 1.84698 5.52396 1.94472L3.19535 3.55361C2.0545 4.34185 1.65274 5.79072 2.23507 7.01665L2.96169 8.54636C2.96195 8.54692 2.96221 8.54746 2.96246 8.548ZM13.9005 21.1673C8.25924 18.8754 3.72182 14.6489 1.17162 9.33292L1.17009 9.32978L0.441945 7.79685C-0.528605 5.75364 0.140997 3.33884 2.04243 2.02511L4.37103 0.416223C5.3613 -0.267983 6.73778 -0.0912667 7.50465 0.818507L9.8618 3.61492C10.682 4.58788 10.4909 6.01859 9.44146 6.76291L8.5623 7.38648C10.0475 10.1443 12.401 12.397 15.2826 13.8183L15.9342 12.9768C16.7119 11.9725 18.2067 11.7897 19.2234 12.5747L22.1448 14.8302C23.0956 15.5644 23.2801 16.8824 22.5646 17.8302L20.8911 20.0468C19.5263 21.8546 17.0243 22.4994 14.8956 21.5916L13.9005 21.1673Z"
                          fill="#169FD8" />
                </svg>
            </div>
            <div class="right-in">
                <p class="txt-14">Ishonch raqami</p>
                <p class="txt-14 fw5"><?=$logo->tel?></p>
            </div>
        </div>
        <svg class="back" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.46436 15.5354L15.5354 8.46436" stroke="black" stroke-width="1.5" stroke-linecap="round" />
            <path d="M8.46436 8.46436L15.5354 15.5354" stroke="black" stroke-width="1.5" stroke-linecap="round" />
        </svg>
    </div>
    <div class="top-in-right">
        <div class="blog-k">
            <div class="language dropdown">
                <button class="dropdown-toggle language-in" type="button" id="dropdownMenuClickableInside"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <a class="phone glavni-btn">
                        <svg class="rot" width="25" height="25" viewBox="0 0 25 25" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.77734 12.2844C8.77734 10.2134 10.4563 8.53442 12.5273 8.53442C14.5984 8.53442 16.2773 10.2134 16.2773 12.2844C16.2773 14.3555 14.5984 16.0344 12.5273 16.0344C10.4563 16.0344 8.77734 14.3555 8.77734 12.2844ZM12.5273 10.0344C11.2847 10.0344 10.2773 11.0418 10.2773 12.2844C10.2773 13.527 11.2847 14.5344 12.5273 14.5344C13.7699 14.5344 14.7773 13.527 14.7773 12.2844C14.7773 11.0418 13.7699 10.0344 12.5273 10.0344Z"
                                  fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M4.85077 10.9308C4.43165 11.5347 4.27734 12.0071 4.27734 12.2844C4.27734 12.5617 4.43165 13.0341 4.85077 13.638C5.25591 14.2218 5.85812 14.8547 6.62001 15.4394C8.14712 16.6115 10.2408 17.5344 12.5273 17.5344C14.8138 17.5344 16.9075 16.6115 18.4346 15.4394C19.1965 14.8547 19.7987 14.2218 20.2039 13.638C20.623 13.0341 20.7773 12.5617 20.7773 12.2844C20.7773 12.0071 20.623 11.5347 20.2039 10.9308C19.7987 10.347 19.1965 9.71414 18.4346 9.12939C16.9075 7.95734 14.8138 7.03442 12.5273 7.03442C10.2408 7.03442 8.14712 7.95734 6.62001 9.12939C5.85812 9.71414 5.25591 10.347 4.85077 10.9308ZM5.70675 7.93945C7.43699 6.6115 9.84332 5.53442 12.5273 5.53442C15.2113 5.53442 17.6176 6.6115 19.3479 7.93945C20.2147 8.6047 20.9305 9.34686 21.4362 10.0756C21.9279 10.7841 22.2773 11.5617 22.2773 12.2844C22.2773 13.0071 21.9279 13.7847 21.4362 14.4933C20.9305 15.222 20.2147 15.9641 19.3479 16.6294C17.6176 17.9573 15.2113 19.0344 12.5273 19.0344C9.84332 19.0344 7.43699 17.9573 5.70675 16.6294C4.83996 15.9641 4.12415 15.222 3.61844 14.4933C3.12671 13.7847 2.77734 13.0071 2.77734 12.2844C2.77734 11.5617 3.12671 10.7841 3.61844 10.0756C4.12415 9.34686 4.83996 8.6047 5.70675 7.93945Z"
                                  fill="white" />
                        </svg>
                    </a>
                </button>
                <ul class="dropdown-menu menu-in dropdown-menu-end"
                    aria-labelledby="dropdownMenuClickableInside">
                    <p class="txt-16">Ko'rinishi</p>
                    <div class="bottom">
                        <div class="blog-color">
                            <a id="normal-t" class="phone glavni-btn">
                            </a>
                            <p class="txt-12">Normal</p>
                        </div>
                        <div class="blog-color">
                            <a id="gray-t" class="phone glavni-btn">
                            </a>
                            <p class="txt-12">Gray</p>
                        </div>
                        <div class="blog-color">
                            <a id="mode-t" mode class="phone glavni-btn">
                            </a>
                            <p class="txt-12">Dark</p>
                        </div>
                        <div class="blog-color">
                            <a id="image-t" class="phone glavni-btn">
                                <svg width="32" height="31" viewBox="0 0 32 31" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.8242 11.625C18.8242 10.5549 19.6917 9.6875 20.7617 9.6875C21.8317 9.6875 22.6992 10.5549 22.6992 11.625C22.6992 12.6951 21.8317 13.5625 20.7617 13.5625C19.6917 13.5625 18.8242 12.6951 18.8242 11.625Z"
                                        fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M24.6773 24.7636L22.904 22.9902L22.1873 23.0525C18.2314 23.3963 14.2531 23.3963 10.2973 23.0525L8.34656 22.8829C7.37222 22.7981 6.58289 22.0567 6.43746 21.0895C6.34117 20.4492 6.26152 19.8072 6.19852 19.1638L11.6799 13.6823L16.164 18.7269C16.4215 19.0165 16.8267 19.1249 17.1945 19.0023L18.4857 18.5719L11.3083 11.3945C11.2083 11.4417 11.1162 11.506 11.0364 11.5858L6.03525 16.5869C5.97074 14.3568 6.10481 12.1225 6.43746 9.91033C6.569 9.0356 7.22726 8.3455 8.07274 8.15895L6.58311 6.66932C5.49897 7.26342 4.71444 8.33914 4.5215 9.62223C3.93554 13.5188 3.93554 17.4811 4.5215 21.3777C4.80011 23.2305 6.31222 24.6508 8.17877 24.8131L10.1295 24.9826C14.197 25.3363 18.2875 25.3363 22.3551 24.9826L24.3057 24.8131C24.4313 24.8022 24.5553 24.7856 24.6773 24.7636ZM11.4833 5.91268C15.1039 5.66803 18.7385 5.70289 22.3551 6.01726L24.3057 6.18683C26.1723 6.34909 27.6845 7.76947 27.9631 9.62223C28.549 13.5188 28.549 17.4811 27.9631 21.3777C27.921 21.6575 27.8508 21.9275 27.7555 22.1848L26.1238 20.5531C26.603 17.0208 26.5774 13.4373 26.047 9.91033C25.9016 8.9432 25.1123 8.20175 24.138 8.11706L22.1873 7.94749C19.2386 7.69116 16.2774 7.6259 13.3224 7.75171L11.4833 5.91268Z"
                                          fill="black" />
                                    <path d="M6.24219 3L28.2422 25.5" stroke="black" stroke-width="2"
                                          stroke-linecap="round" />
                                </svg>
                            </a>
                            <p class="txt-12">No image</p>
                        </div>
                    </div>
                    <p class="txt-16 katta">Kattalashtirish</p>

                    <p class="txt-12"><output class="txt-12">0</output>%ga kattaroq</p>
                    <input class="none cah" type="range" min="11" max="15" value="11" id="slider">
                </ul>
            </div>

        </div>
    </div>
    <div class="menu-l-in">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button txt-16" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Tashkilot haqida
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="#" class="txt-16">Umumiy ma’lumot</a>
                        <a href="#" class="txt-16">Tarkiyib tuzilma</a>
                        <a href="#" class="txt-16">Xududiy boshqarmalar</a>
                        <a href="#" class="txt-16">Xududiy boshqarmalar</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed txt-16" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Hujjatlar
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="#" class="txt-16">Umumiy ma’lumot</a>
                        <a href="#" class="txt-16">Tarkiyib tuzilma</a>
                        <a href="#" class="txt-16">Xududiy boshqarmalar</a>
                        <a href="#" class="txt-16">Xududiy boshqarmalar</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button txt-16 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Rahbariyat
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="#" class="txt-16">Tarkiyib tuzilma</a>
                        <a href="#" class="txt-16">Xududiy boshqarmalar</a>
                        <a href="#" class="txt-16">Xududiy boshqarmalar</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <a href="#" class="txt-16 menu-in">Bog’lanish</a>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <a href="#" class="txt-16 menu-in">Matbuot xizmatlari</a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="navigation-top">
    <div class="my-container">
        <div class="top-in">
            <div class="top-in-left">
                <svg class="menu-h" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.75 12C19.75 11.5858 19.4142 11.25 19 11.25H5C4.58579 11.25 4.25 11.5858 4.25 12C4.25 12.4142 4.58579 12.75 5 12.75H19C19.4142 12.75 19.75 12.4142 19.75 12Z"
                          fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.75 7C19.75 6.58579 19.4142 6.25 19 6.25H5C4.58579 6.25 4.25 6.58579 4.25 7C4.25 7.41421 4.58579 7.75 5 7.75H19C19.4142 7.75 19.75 7.41421 19.75 7Z"
                          fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.75 17C19.75 16.5858 19.4142 16.25 19 16.25H5C4.58579 16.25 4.25 16.5858 4.25 17C4.25 17.4142 4.58579 17.75 5 17.75H19C19.4142 17.75 19.75 17.4142 19.75 17Z"
                          fill="black" />
                </svg>

                <a href="<?=url::home()?>" class="logos">
                    <img src="<?=$logo->img?>" alt="logo" class="logo">
                    <p class="txt-16">
                       <?=$logo->name?>
                    </p>
                </a>
                <div class="main-page">
                    <div class="main-page-in at">
                        <div class="left-in">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.24728 15.6059C12.0772 21.768 17.113 26.6671 23.373 29.3218L23.3928 29.3301L24.6022 29.8691C26.1423 30.5553 27.9524 30.068 28.9397 28.7014L30.9575 25.9089C31.0807 25.7384 31.0489 25.5012 30.8852 25.369L27.3627 22.5272C27.1876 22.386 26.93 22.4189 26.796 22.5996L25.4252 24.4495C25.0922 24.8989 24.4909 25.055 23.9815 24.8245C19.3005 22.706 15.539 18.9444 13.4206 14.2635C13.19 13.754 13.3461 13.1527 13.7954 12.8198L15.6453 11.4489C15.8261 11.3149 15.859 11.0574 15.7177 10.8823L12.8756 7.35931C12.7435 7.19556 12.5064 7.16377 12.3358 7.2869L9.52809 9.31382C8.1525 10.3069 7.66808 12.1322 8.37023 13.6767L9.24635 15.6038C9.24667 15.6045 9.24698 15.6052 9.24728 15.6059ZM22.4359 31.5041C15.6339 28.6167 10.1629 23.292 7.08798 16.5948L7.08613 16.5908L6.20817 14.6596C5.03793 12.0855 5.8453 9.04325 8.13795 7.38817L10.9457 5.36125C12.1397 4.49927 13.7994 4.7219 14.724 5.86806L17.5662 9.39106C18.5551 10.6168 18.3247 12.4193 17.0593 13.357L15.9993 14.1426C17.79 17.617 20.6279 20.4549 24.1023 22.2455L24.888 21.1855C25.8256 19.9202 27.6281 19.6899 28.8539 20.6788L32.3763 23.5204C33.5228 24.4454 33.7453 26.1059 32.8825 27.2998L30.8647 30.0924C29.2192 32.37 26.2023 33.1822 23.6357 32.0386L22.4359 31.5041Z" fill="#4776B3"/>
                            </svg>

                        </div>
                        <div class="right-in">
                            <p class="txt-16">
                                Biz bilan bo’glanish
                            </p>
                            <p class="txt-16 fw5">+998 97 628 28 82</p>
                        </div>
                    </div>
                    <div class="main-page-in at2">
                        <div class="left-in">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.43938 13.2261C3.99583 17.3473 4.0156 22.1005 4.63282 26.205C4.97434 28.4761 6.8279 30.2171 9.11593 30.4161L11.5071 30.6239C16.4932 31.0574 21.5073 31.0574 26.4933 30.6239L28.8845 30.4161C31.1726 30.2171 33.0262 28.4761 33.3677 26.205C33.9849 22.1005 34.0047 17.3476 33.561 13.2263C33.5037 12.7485 33.4393 12.2714 33.3677 11.795C33.0262 9.5239 31.1726 7.78279 28.8845 7.58389L26.4933 7.37603C21.5073 6.94261 16.4932 6.94261 11.5071 7.37603L9.11593 7.58389C6.8279 7.78279 4.97434 9.5239 4.63282 11.795C4.5612 12.2713 4.49673 12.7483 4.43938 13.2261ZM11.7128 9.74212C16.5619 9.32059 21.4385 9.32059 26.2877 9.74212L28.6788 9.94998C29.8731 10.0538 30.8407 10.9627 31.019 12.1482C31.0375 12.2713 31.0555 12.3945 31.0731 12.5177L22.2682 17.4094C20.2358 18.5385 17.7646 18.5385 15.7322 17.4094L6.92737 12.5178C6.94488 12.3945 6.9629 12.2713 6.98141 12.1482C7.15969 10.9627 8.12725 10.0538 9.32161 9.94998L11.7128 9.74212ZM31.3637 15.0732C31.6708 18.6637 31.5559 22.2815 31.019 25.8517C30.8407 27.0373 29.8731 27.9461 28.6788 28.05L26.2877 28.2579C21.4385 28.6794 16.5619 28.6794 11.7128 28.2579L9.32161 28.05C8.12725 27.9461 7.15969 27.0373 6.98141 25.8517C6.44452 22.2815 6.32963 18.6639 6.63675 15.0732L14.5788 19.4854C17.3285 21.013 20.6719 21.013 23.4215 19.4854L31.3637 15.0732Z" fill="#4776B3"/>
                            </svg>


                        </div>
                        <div class="right-in">
                            <p class="txt-16">
                                Bizning  elektron pochtamiz
                            </p>
                            <p class="txt-16 fw5">Faksa.the@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="menu-bar">
    <div class="my-container">
        <div class="bar-in">
            <ul class="menu">
                <li class="dropdown menu-in">
                    <a class="txt-18 m-in dropdown-toggle menu-in-in" type="button" data-bs-toggle="dropdown"
                       aria-expanded="false">


                        <svg class="chervon" width="10" height="6" viewBox="0 0 10 6" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.5303 0.469668C9.8232 0.762558 9.8232 1.23744 9.5303 1.5303L5.5303 5.5303C5.2374 5.8232 4.7626 5.8232 4.4697 5.5303L0.469668 1.5303C0.176777 1.23744 0.176777 0.762558 0.469668 0.469668C0.762558 0.176777 1.23744 0.176777 1.53033 0.469668L5 3.9393L8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668Z"
                                  fill="white" />
                        </svg>
                        <span class="txt-16">
                                Tashkilot haqida
                            </span>

                    </a>
                    <ul class="dropdown-menu menu-in-menu">
                        <li><a class="dropdown-item txt-16" href="batafsil.html">Biz haqimizda</a></li>
                        <li><a class="dropdown-item txt-16" href="batafsil.html">Bosh ish o’rinlari</a></li>
                        <li><a class="dropdown-item txt-16" href="batafsil.html">Xududiy boshqarmalar</a></li>
                        <li><a class="dropdown-item txt-16" href="batafsil.html">Vazirlik vazifalari va funksialari</a></li>
                    </ul>
                </li>
                <li class="dropdown menu-in">
                    <a class="txt-18 m-in dropdown-toggle menu-in-in" type="button" data-bs-toggle="dropdown"
                       aria-expanded="false">


                        <svg class="chervon" width="10" height="6" viewBox="0 0 10 6" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.5303 0.469668C9.8232 0.762558 9.8232 1.23744 9.5303 1.5303L5.5303 5.5303C5.2374 5.8232 4.7626 5.8232 4.4697 5.5303L0.469668 1.5303C0.176777 1.23744 0.176777 0.762558 0.469668 0.469668C0.762558 0.176777 1.23744 0.176777 1.53033 0.469668L5 3.9393L8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668Z"
                                  fill="white" />
                        </svg>
                        <span class="txt-16">
                                Hujjatlar
                            </span>

                    </a>
                    <ul class="dropdown-menu menu-in-menu">
                        <li><a class="dropdown-item txt-16" href="batafsil-qonun.html">Biz haqimizda</a></li>
                        <li><a class="dropdown-item txt-16" href="batafsil-qonun.html">Bosh ish o’rinlari</a></li>
                        <li><a class="dropdown-item txt-16" href="batafsil-qonun.html">Xududiy boshqarmalar</a></li>
                        <li><a class="dropdown-item txt-16" href="batafsil-qonun.html">Vazirlik vazifalari va funksialari</a></li>
                    </ul>
                </li>
                <li class="dropdown menu-in">
                    <a class="txt-18 m-in dropdown-toggle menu-in-in" type="button" data-bs-toggle="dropdown"
                       aria-expanded="false">


                        <svg class="chervon" width="10" height="6" viewBox="0 0 10 6" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.5303 0.469668C9.8232 0.762558 9.8232 1.23744 9.5303 1.5303L5.5303 5.5303C5.2374 5.8232 4.7626 5.8232 4.4697 5.5303L0.469668 1.5303C0.176777 1.23744 0.176777 0.762558 0.469668 0.469668C0.762558 0.176777 1.23744 0.176777 1.53033 0.469668L5 3.9393L8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668Z"
                                  fill="white" />
                        </svg>
                        <span class="txt-16">
                                Ta’lim
                            </span>

                    </a>
                    <ul class="dropdown-menu menu-in-menu">
                        <li><a class="dropdown-item txt-16" href="korupsiya.html">Biz haqimizda</a></li>
                        <li><a class="dropdown-item txt-16" href="pedogok.html">Bosh ish o’rinlari</a></li>
                        <li><a class="dropdown-item txt-16" href="quations.html">Xududiy boshqarmalar</a></li>
                        <li><a class="dropdown-item txt-16" href="statistika.html">Vazirlik vazifalari va funksialari</a></li>
                    </ul>
                </li>
                <li class="dropdown menu-in">
                    <a class="txt-18 m-in dropdown-toggle menu-in-in" type="button" data-bs-toggle="dropdown"
                       aria-expanded="false">


                        <svg class="chervon" width="10" height="6" viewBox="0 0 10 6" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.5303 0.469668C9.8232 0.762558 9.8232 1.23744 9.5303 1.5303L5.5303 5.5303C5.2374 5.8232 4.7626 5.8232 4.4697 5.5303L0.469668 1.5303C0.176777 1.23744 0.176777 0.762558 0.469668 0.469668C0.762558 0.176777 1.23744 0.176777 1.53033 0.469668L5 3.9393L8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668Z"
                                  fill="white" />
                        </svg>
                        <span class="txt-16">
                                Faoliyat
                            </span>

                    </a>
                    <ul class="dropdown-menu menu-in-menu">
                        <li><a class="dropdown-item txt-16" href="maktablar.html">Biz haqimizda</a></li>
                        <li><a class="dropdown-item txt-16" href="maktablar.html">Bosh ish o’rinlari</a></li>
                        <li><a class="dropdown-item txt-16" href="maktablar.html">Xududiy boshqarmalar</a></li>
                        <li><a class="dropdown-item txt-16" href="maktablar.html">Vazirlik vazifalari va funksialari</a></li>
                    </ul>
                </li>
                <li class="dropdown menu-in">
                    <a class="txt-18 m-in dropdown-toggle menu-in-in" type="button" data-bs-toggle="dropdown"
                       aria-expanded="false">


                        <svg class="chervon" width="10" height="6" viewBox="0 0 10 6" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.5303 0.469668C9.8232 0.762558 9.8232 1.23744 9.5303 1.5303L5.5303 5.5303C5.2374 5.8232 4.7626 5.8232 4.4697 5.5303L0.469668 1.5303C0.176777 1.23744 0.176777 0.762558 0.469668 0.469668C0.762558 0.176777 1.23744 0.176777 1.53033 0.469668L5 3.9393L8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668Z"
                                  fill="white" />
                        </svg>
                        <span class="txt-16">
                                Xizmatlar
                            </span>

                    </a>
                    <ul class="dropdown-menu menu-in-menu">
                        <li><a class="dropdown-item txt-16" href="tadbirlar.html">Biz haqimizda</a></li>
                        <li><a class="dropdown-item txt-16" href="tadbirlar.html">Bosh ish o’rinlari</a></li>
                        <li><a class="dropdown-item txt-16" href="tadbirlar.html">Xududiy boshqarmalar</a></li>
                        <li><a class="dropdown-item txt-16" href="tadbirlar.html">Vazirlik vazifalari va funksialari</a></li>
                    </ul>
                </li>
                <li class="dropdown menu-in">
                    <a class="txt-18 m-in dropdown-toggle menu-in-in" type="button" data-bs-toggle="dropdown"
                       aria-expanded="false">


                        <svg class="chervon" width="10" height="6" viewBox="0 0 10 6" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.5303 0.469668C9.8232 0.762558 9.8232 1.23744 9.5303 1.5303L5.5303 5.5303C5.2374 5.8232 4.7626 5.8232 4.4697 5.5303L0.469668 1.5303C0.176777 1.23744 0.176777 0.762558 0.469668 0.469668C0.762558 0.176777 1.23744 0.176777 1.53033 0.469668L5 3.9393L8.4697 0.469668C8.7626 0.176777 9.2374 0.176777 9.5303 0.469668Z"
                                  fill="white" />
                        </svg>
                        <span class="txt-16">
                                Axborot xizmati
                            </span>

                    </a>
                    <ul class="dropdown-menu menu-in-menu">
                        <li><a class="dropdown-item txt-16" href="rahbaryat.html">Biz haqimizda</a></li>
                        <li><a class="dropdown-item txt-16" href="rahbaryat.html">Bosh ish o’rinlari</a></li>
                        <li><a class="dropdown-item txt-16" href="rahbaryat.html">Xududiy boshqarmalar</a></li>
                        <li><a class="dropdown-item txt-16" href="rahbaryat.html">Vazirlik vazifalari va funksialari</a></li>
                    </ul>
                </li>

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
                                          fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M4.85077 10.9308C4.43165 11.5347 4.27734 12.0071 4.27734 12.2844C4.27734 12.5617 4.43165 13.0341 4.85077 13.638C5.25591 14.2218 5.85812 14.8547 6.62001 15.4394C8.14712 16.6115 10.2408 17.5344 12.5273 17.5344C14.8138 17.5344 16.9075 16.6115 18.4346 15.4394C19.1965 14.8547 19.7987 14.2218 20.2039 13.638C20.623 13.0341 20.7773 12.5617 20.7773 12.2844C20.7773 12.0071 20.623 11.5347 20.2039 10.9308C19.7987 10.347 19.1965 9.71414 18.4346 9.12939C16.9075 7.95734 14.8138 7.03442 12.5273 7.03442C10.2408 7.03442 8.14712 7.95734 6.62001 9.12939C5.85812 9.71414 5.25591 10.347 4.85077 10.9308ZM5.70675 7.93945C7.43699 6.6115 9.84332 5.53442 12.5273 5.53442C15.2113 5.53442 17.6176 6.6115 19.3479 7.93945C20.2147 8.6047 20.9305 9.34686 21.4362 10.0756C21.9279 10.7841 22.2773 11.5617 22.2773 12.2844C22.2773 13.0071 21.9279 13.7847 21.4362 14.4933C20.9305 15.222 20.2147 15.9641 19.3479 16.6294C17.6176 17.9573 15.2113 19.0344 12.5273 19.0344C9.84332 19.0344 7.43699 17.9573 5.70675 16.6294C4.83996 15.9641 4.12415 15.222 3.61844 14.4933C3.12671 13.7847 2.77734 13.0071 2.77734 12.2844C2.77734 11.5617 3.12671 10.7841 3.61844 10.0756C4.12415 9.34686 4.83996 8.6047 5.70675 7.93945Z"
                                          fill="white" />
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
                                                    fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M24.6773 24.7636L22.904 22.9902L22.1873 23.0525C18.2314 23.3963 14.2531 23.3963 10.2973 23.0525L8.34656 22.8829C7.37222 22.7981 6.58289 22.0567 6.43746 21.0895C6.34117 20.4492 6.26152 19.8072 6.19852 19.1638L11.6799 13.6823L16.164 18.7269C16.4215 19.0165 16.8267 19.1249 17.1945 19.0023L18.4857 18.5719L11.3083 11.3945C11.2083 11.4417 11.1162 11.506 11.0364 11.5858L6.03525 16.5869C5.97074 14.3568 6.10481 12.1225 6.43746 9.91033C6.569 9.0356 7.22726 8.3455 8.07274 8.15895L6.58311 6.66932C5.49897 7.26342 4.71444 8.33914 4.5215 9.62223C3.93554 13.5188 3.93554 17.4811 4.5215 21.3777C4.80011 23.2305 6.31222 24.6508 8.17877 24.8131L10.1295 24.9826C14.197 25.3363 18.2875 25.3363 22.3551 24.9826L24.3057 24.8131C24.4313 24.8022 24.5553 24.7856 24.6773 24.7636ZM11.4833 5.91268C15.1039 5.66803 18.7385 5.70289 22.3551 6.01726L24.3057 6.18683C26.1723 6.34909 27.6845 7.76947 27.9631 9.62223C28.549 13.5188 28.549 17.4811 27.9631 21.3777C27.921 21.6575 27.8508 21.9275 27.7555 22.1848L26.1238 20.5531C26.603 17.0208 26.5774 13.4373 26.047 9.91033C25.9016 8.9432 25.1123 8.20175 24.138 8.11706L22.1873 7.94749C19.2386 7.69116 16.2774 7.6259 13.3224 7.75171L11.4833 5.91268Z"
                                                  fill="black" />
                                            <path d="M6.24219 3L28.2422 25.5" stroke="black" stroke-width="2"
                                                  stroke-linecap="round" />
                                        </svg>
                                    </a>
                                    <p class="txt-12">No image</p>
                                </div>
                            </div>
                            <p class="txt-16 katta">Shrift o’lchami</p>

                            <p class="txt-12"><output class="txt-12">0</output>%ga kattaroq</p>
                            <input class="none cah" type="range" min="11" max="15" value="11" id="slider">
                        </ul>
                    </div>

                </div>
                <a class="phone glavni-btn mod" href="#">
                    <svg class="poisk" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M15.1801 16.5942C11.6463 19.4245 6.47377 19.2017 3.19805 15.926C-0.316668 12.4113 -0.316668 6.71283 3.19805 3.19811C6.71277 -0.316607 12.4113 -0.316607 15.9259 3.19811C19.2017 6.47382 19.4245 11.6464 16.5942 15.1801L23.4685 22.0542C23.859 22.4448 23.859 23.078 23.4685 23.4685C23.0779 23.859 22.4447 23.859 22.0542 23.4685L15.1801 16.5942ZM4.61226 14.5118C1.8786 11.7781 1.8786 7.34599 4.61226 4.61233C7.34594 1.87866 11.7781 1.87866 14.5118 4.61233C17.2434 7.34399 17.2454 11.7716 14.5178 14.5058C14.5158 14.5078 14.5138 14.5097 14.5117 14.5118C14.5097 14.5138 14.5077 14.5158 14.5058 14.5178C11.7715 17.2454 7.34393 17.2434 4.61226 14.5118Z"
                              fill="white" />
                    </svg>
                </a>

            </div>
        </div>
    </div>
</div>