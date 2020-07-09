@include('admin/inc/header')

<!-- Left Sidebar -->
@include('admin/inc/left-sidebar')

<!-- Right Sidebar -->
@include('admin/inc/right-sidebar')
<style>
    .col-5-12{
        max-width: 20%;
        flex: 0 0 20%;
    }
</style>
<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Dashboard
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">

                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                <div class="body">
                                    <h2 class="number count-to m-t-0 m-b-5" data-from="0" data-to="501" data-speed="1000" data-fresh-interval="700">৫০১</h2>
                                    <p class="text-muted">মোট সদস্য সংখ্যা</p>
                                    <span id="linecustom1">1,4,2,6,5,2,3,8,5,2</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                <div class="body">
                                    <h2 class="number count-to m-t-0 m-b-5" data-from="0" data-to="2501" data-speed="2000" data-fresh-interval="700">২৫০৯</h2>
                                    <p class="text-muted "> মোট ঋণ সংখ্যা</p>
                                    <span id="linecustom2">2,9,5,5,8,5,4,2,6</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                                <div class="body">
                                    <h2 class="number count-to m-t-0 m-b-5" data-from="0" data-to="6051" data-speed="2000" data-fresh-interval="700">৬৫০৯</h2>
                                    <p class="text-muted"> মোট সঞ্চয় সংখ্যা</p>
                                    <span id="linecustom3">1,5,3,6,6,3,6,8,4,2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>কালেকশান </strong> রিপোর্ট</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row text-center">
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">১০০০০ টাকা <i class="zmdi zmdi-trending-up col-green"></i></h4>
                                <p class="text-muted">  আজকের কালেকশন </p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0"> ৭০০০০০ টাকা <i class="zmdi zmdi-trending-down col-red"></i></h4>
                                <p class="text-muted">সপ্তাহের কালেকশন</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">৩০০০০০ টাকা <i class="zmdi zmdi-trending-up col-green"></i></h4>
                                <p class="text-muted"> মাসের কালেকশন</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">৩৫০০০০০ টাকা <i class="zmdi zmdi-trending-up col-green"></i></h4>
                                <p class="text-muted"> বৎসরের কালেকশন</p>
                            </div>
                        </div>
                        <div id="area_chart" class="graph"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Members</strong> Profiles <small>Members Preformance / Monthly Status</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive members_profiles">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="width:60px;">Member</th>
                                <th>Name</th>
                                <th>Earnings</th>
                                <th>Sales</th>
                                <th>Reviews</th>
                                <th>Progress</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img class="rounded-circle" src="assets/images/xs/avatar1.jpg" alt="user" width="40"> </td>
                                <td>
                                    <a href="javascript:void(0);">Logan</a>
                                </td>
                                <td>$420</td>
                                <td>23</td>
                                <td>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="rounded-circle" src="assets/images/xs/avatar2.jpg" alt="user" width="40"> </td>
                                <td>
                                    <a href="javascript:void(0);">Isabella</a>
                                </td>
                                <td>$350</td>
                                <td>16</td>
                                <td>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="rounded-circle" src="assets/images/xs/avatar3.jpg" alt="user" width="40"> </td>
                                <td>
                                    <a href="javascript:void(0);">Jackson</a>
                                </td>
                                <td>$201</td>
                                <td>11</td>
                                <td>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="rounded-circle" src="assets/images/xs/avatar4.jpg" alt="user" width="40"> </td>
                                <td>
                                    <a href="javascript:void(0);">Victoria</a>
                                </td>
                                <td>$651</td>
                                <td>28</td>
                                <td>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="rounded-circle" src="assets/images/xs/avatar5.jpg" alt="user" width="40"> </td>
                                <td>
                                    <a href="javascript:void(0);">Lucas</a>
                                </td>
                                <td>$300</td>
                                <td>20</td>
                                <td>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('admin/inc/footer')
