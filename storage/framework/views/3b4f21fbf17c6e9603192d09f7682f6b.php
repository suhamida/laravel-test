<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Welcome to Admin Home')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <table border="1" width="1200" >

                    <tr>
                        <td valign="top" align="center" >
                            <h2>
                                Sayda Umma Hamida
                            </h2>
                            <table align="left" width="500" height="100">
                                <tr>
                                    <td width="1a00">
                                        <b>Address: </b> Donia, Dhaka-1236, Bangladesh <br/>
                                        <b> Phone:</b> 01822278480
                                    </td>
                                    <td width="100">
                                        <b>Github: </b>//github-suhamida <br/>
                                        <b> Email:</b> hamida.cse@gmail.com
                                    </td>
                                </tr>
                            </table>
                            <table align="center" cellpadding="6" width="900" height="600">
                                <tr >
                                    <td>Research experience</td>
                                    <td><p>
                                            <b> Explainable Artificial Intelligence: Unboxing the Black Boxes of
                                                Machine Learning System </b>
                                            <br />
                                            <b>Mentors:</b> Mr. Narayan Ranjan Chakraborty & Mr. Jabed Morshed
                                        </p>
                                        <p>
                                            <b> Effectiveness of Machine Learning For Mental Health: Observing
                                                thee Mental State of Bangladeshi People</b>
                                            <br />
                                            <b>Mentors:</b> Mr. Narayan Ranjan Chakraborty
                                        </p>
                                    </td>
                                    <td> August 2021 – Present <br /> <br/> <br/>
                                        January 2021 – June 2021
                                    </td>
                                </tr>
                                <tr>
                                    <td>Education </td>
                                    <td><p>
                                            <b> Daffodil Int. University </b>
                                            <br />
                                            M.Sc in CSE– 2021
                                        </p>
                                        <p>
                                            <b> Central Women’s University </b> <br />
                                            B.Sc in CSE– 2019

                                        </p>
                                    </td>
                                    <td> Dhanmondi,Dhaka <br/>
                                        CGPA: 3.77 out of 4 <br/><br/>
                                        Tikatuli, Dhaka <br />
                                        CGPA: 3.33 out of 4

                                    </td>
                                </tr>
                                <tr>
                                    <td> Achievements </td>
                                    <td>
                                        <b> IoT BootCamp (BDOSN) </b> <br />
                                        <b> Volunteering - CWU </b> <br />
                                        <b> Grace Hopper Girl’s Programming Camp (CWU) </b> <br />
                                        <b> IUPC - City University </b>
                                    </td>
                                    <td>
                                        Oct 2018 <br />
                                        May 2018 <br />
                                        Jun 2017 <br />
                                        Feb 2017
                                    </td>
                                </tr>

                                <tr>
                                    <td> Project</td>
                                    <td>
                                        <b> Library Management System </b> <br />
                                        <b> Tools Used: </b> MySQL, jQery.  <br /> <br />
                                        <b> Student Phone-book App </b> <br />
                                        <b> Tools Used: </b> Android Studio <br /> <br />
                                        <b>  Student Result  </b>   <br />
                                        <b> Tools Used:  </b> HTML5, PHP, CSS3, MySQL <br /> <br />
                                        <b>  BOOKTIQUE </b>   <br />
                                        <b> Tools Used:  </b> MySQL, JavaScript, HTML5, PHP, CSS3
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td height="300" colspan="2">
                            <table width="1200" border="1">
                                <tr>
                                    <td height="300">
                                        <b>Aim in Next 3 years</b>
                                        <p> Working in this industry and be a skilled web developer </p>
                                    </td>
                                    <td>
                                        <b>Why in this industry</b>
                                        <p> I tried in different sector and achieved a lot but always missed my root. </br>
                                            Yeah, it was my passion and comfort. So i can't think anything else without it </p>
                                    </td>
                                    <td>
                                        <b>Importance of Time</b>
                                        <p> I think time management is very important part of any corporate or professional environment. </br>
                                            Even the workers or individual related in this have to maintain it equally to grow and achieve success in their field</p>
                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                    <tr>
                        <td  class="justify-items-center" height="20" colspan="2" width="1200">
                            <img src="images/un1.png"  class="justify-items-center" id="logo" height="100" width="100" alt="mun" /> Designed by@Hamida
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\laravel-test\resources\views/dashboard.blade.php ENDPATH**/ ?>