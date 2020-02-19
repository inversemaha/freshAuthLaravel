@extends('layouts.app')

@section('title', 'Admin Home')


@section('content')


        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <span class="label label-success float-right">Monthly</span>
                            <h5>Income</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">40 886,200</h1>
                            <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                            <small>Total income</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <span class="label label-info float-right">Annual</span>
                            <h5>Orders</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">275,800</h1>
                            <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                            <small>New orders</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <span class="label label-primary float-right">Today</span>
                            <h5>visits</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">106,120</h1>
                            <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                            <small>New visits</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <span class="label label-danger float-right">Low value</span>
                            <h5>User activity</h5>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">80,600</h1>
                            <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                            <small>In first month</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Messages</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content ibox-heading">
                            <h3><i class="fa fa-envelope-o"></i> New messages</h3>
                            <small><i class="fa fa-tim"></i> You have 22 new messages and 16 waiting in draft folder.
                            </small>
                        </div>
                        <div class="ibox-content">
                            <div class="feed-activity-list">

                                <div class="feed-element">
                                    <div>
                                        <small class="float-right text-navy">1m ago</small>
                                        <strong>Monica Smith</strong>
                                        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum
                                        </div>
                                        <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                    </div>
                                </div>

                                <div class="feed-element">
                                    <div>
                                        <small class="float-right">2m ago</small>
                                        <strong>Jogn Angel</strong>
                                        <div>There are many variations of passages of Lorem Ipsum available</div>
                                        <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                                    </div>
                                </div>



                                <div class="feed-element">
                                    <div>
                                        <small class="float-right">5m ago</small>
                                        <strong>Gary Smith</strong>
                                        <div>200 Latin words, combined with a handful</div>
                                        <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox ">

                                <div class="ibox-content table-responsive">
                                    <table class="table table-hover no-margins">
                                        <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>User</th>
                                            <th>Value</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                            <td>Samantha</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 24%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-warning">Canceled</span></td>
                                            <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                            <td>Monica</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 66%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                            <td>John</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 54%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 02:20pm</td>
                                            <td>Agnes</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 09:40pm</td>
                                            <td>Janet</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 22%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-primary">Completed</span></td>
                                            <td><i class="fa fa-clock-o"></i> 04:10am</td>
                                            <td>Amelia</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 66%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 12:08am</td>
                                            <td>Damian</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 23%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Small todo list</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <ul class="todo-list m-t small-list">
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                            <span class="m-l-xs todo-completed">Buy a milk</span>

                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Go to shop and find some products.</span>

                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Send documents to Mike</span>
                                            <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins
                                            </small>
                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Go to the doctor dr Smith</span>
                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                            <span class="m-l-xs todo-completed">Plan vacation</span>
                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Create new stuff</span>
                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Call to Anna for dinner</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>


@endsection