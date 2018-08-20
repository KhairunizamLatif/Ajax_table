<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="../../css/table.css">
<script src="table_ajax_user.js"></script>
<script src="../../js/dashboard.js"></script>


<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:  #333333;">
            <h3 class="panel-title">Latest Users</h3>
        </div>
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-5">
                    <input id="myInput" type="text" class="form-control" placeholder="Search..">
                </div>
                <div class="col col-xs-7 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create" data-toggle="modal" data-target="#myModal">Create New</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <tbody id="myTable">
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col col-xs-4">Page 1 of 5
                </div>
                <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <form id="myform"  method="POST"  class="form_status">
                                <div class="form-group">
                                    <label class="control-label" for="code">Code</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input class="form-control" placeholder="Code" name="code" id="code" type="type">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input class="form-control" placeholder="Name" name="name" id="name" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="username">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input class="form-control" placeholder="Username" name="username" id="username" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input class="form-control" placeholder="password" name="password" id="password" type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="classes">Class</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input class="form-control" placeholder="Class" name="classes" id="classes" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="classes_code">Class Code</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input class="form-control" placeholder="Class Code" name="classes_code" id="classes_code" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="status">Status</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input class="form-control" placeholder="Status" name="status" id="status" type="text">
                                    </div>
<!--                                </div>-->
<!--                                <button type="submit" value="Submit" class="submit">msuk</button>-->
                                <button type="submit" name="submit" id="button" class="btn btn-primary">Create an account</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

            </div>
        </div>
        <!-- Modal -->
    </div>
</div>