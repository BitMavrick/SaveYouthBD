<x-master>
    <x-partials.navbar-doctor />

    <div class="container mt-4">
        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="user-profile">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="user-photo m-b-30">
                                            <img class="img-fluid" src="/images/doctor-male.jpg" alt="" />
                                        </div>
                                        <div class="user-work">
                                            <h4>work</h4>
                                            <div class="work-content">
                                                <h3>It Solution </h3>
                                                <p>123, South Mugda</p>
                                                <p>New York, 1214</p>
                                            </div>
                                            <div class="work-content">
                                                <h3>Unix</h3>
                                                <p>123, South Mugda</p>
                                                <p>New York, 1214</p>
                                            </div>
                                        </div>
                                        <div class="user-skill">
                                            <h4>Skill</h4>
                                            <ul>
                                                <li>
                                                    <a href="#">Branding</a>
                                                </li>
                                                <li>
                                                    <a href="#">UI/UX</a>
                                                </li>
                                                <li>
                                                    <a href="#">Web Design</a>
                                                </li>
                                                <li>
                                                    <a href="#">Wordpress</a>
                                                </li>
                                                <li>
                                                    <a href="#">Magento</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="user-profile-name">
                                            <h1>Welcome</h1>
                                            <h2>Dr. {{ Auth::user()->name }}</h2>
                                        </div>

                                        <div class="user-job-title">
                                            <h5>Everything speacialist</h5>
                                        </div>
                                        <div class="user-Location">
                                            <i class="ti-location-pin"></i> New York, New York
                                        </div>
                                        <div class="ratings">
                                            <h4>Ratings</h4>
                                            <div class="rating-star">
                                                <span>8.9</span>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star"></i>
                                            </div>
                                        </div>

                                        <div class="custom-tab user-profile-tab">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#1" aria-controls="1" role="tab" data-toggle="tab">
                                                        <h6>About</h6>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="1">
                                                    <div class="contact-information">
                                                        <h4>Contact information</h4>
                                                        <div class="phone-content">
                                                            <span class="contact-title">Phone:</span>
                                                            <span class="phone-number">+8801629599859</span>
                                                        </div>
                                                        <div class="address-content">
                                                            <span class="contact-title">Address:</span>
                                                            <span class="mail-address">123, Rajar Goli, South
                                                                Mugda</span>
                                                        </div>
                                                        <div class="email-content">
                                                            <span class="contact-title">Email:</span>
                                                            <span class="contact-email">hello@Admin Board.com</span>
                                                        </div>
                                                        <div class="website-content">
                                                            <span class="contact-title">Website:</span>
                                                            <span class="contact-website">www.Admin Board.com</span>
                                                        </div>
                                                        <div class="skype-content">
                                                            <span class="contact-title">Skype:</span>
                                                            <span class="contact-skype">Admin Board</span>
                                                        </div>
                                                    </div>
                                                    <div class="basic-information">
                                                        <h4>Basic information</h4>
                                                        <div class="birthday-content">
                                                            <span class="contact-title">Birthday:</span>
                                                            <span class="birth-date">January 31, 1990 </span>
                                                        </div>
                                                        <div class="gender-content">
                                                            <span class="contact-title">Gender:</span>
                                                            <span class="gender">Male</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4>Recent Project </h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kolor Tea Shirt For Man</td>
                                            <td>
                                                <span class="badge badge-primary">Ongoing</span>
                                            </td>
                                            <td>January 22</td>
                                            <td class="color-primary">$21.56</td>
                                        </tr>
                                        <tr>
                                            <td>Kolor Tea Shirt For Women</td>
                                            <td>
                                                <span class="badge badge-success">Complete</span>
                                            </td>
                                            <td>January 30</td>
                                            <td class="color-success">$55.32</td>
                                        </tr>
                                        <tr>
                                            <td>Blue Backpack For Baby</td>
                                            <td>
                                                <span class="badge badge-danger">Rejected</span>
                                            </td>
                                            <td>January 25</td>
                                            <td class="color-danger">$14.85</td>
                                        </tr>
                                        <tr>
                                            <td>Kolor Tea Shirt For Man</td>
                                            <td>
                                                <span class="badge badge-primary">Ongoing</span>
                                            </td>
                                            <td>January 22</td>
                                            <td class="color-primary">$21.56</td>
                                        </tr>
                                        <tr>
                                            <td>Kolor Tea Shirt For Women</td>
                                            <td>
                                                <span class="badge badge-success">Complete</span>
                                            </td>
                                            <td>January 30</td>
                                            <td class="color-success">$55.32</td>
                                        </tr>
                                        <tr>
                                            <td>Blue Backpack For Baby</td>
                                            <td>
                                                <span class="badge badge-danger">Rejected</span>
                                            </td>
                                            <td>January 25</td>
                                            <td class="color-danger">$14.85</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4>Recent Comments </h4>

                        </div>
                        <div class="recent-comment">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/avatar/1.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">john doe</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                    <div class="comment-action">
                                        <div class="badge badge-success">Approved</div>
                                        <span class="m-l-10">
                                            <a href="#">
                                                <i class="ti-check color-success"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-close color-danger"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-reply color-primary"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <p class="comment-date">October 21, 2017</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/avatar/2.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                    <div class="comment-action">
                                        <div class="badge badge-warning">Pending</div>
                                        <span class="m-l-10">
                                            <a href="#">
                                                <i class="ti-check color-success"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-close color-danger"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-reply color-primary"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <p class="comment-date">October 21, 2017</p>
                                </div>
                            </div>
                            <div class="media no-border">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/avatar/3.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mr. John</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. </p>
                                    <div class="comment-action">
                                        <div class="badge badge-danger">Rejected</div>
                                        <span class="m-l-10">
                                            <a href="#">
                                                <i class="ti-check color-success"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-close color-danger"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-reply color-primary"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="comment-date">October 21, 2017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer">
                        <p>2018 © Admin Board. -
                            <a href="#">example.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <x-partials.footer />
</x-master>