<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add New Customer</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="customers_add.php">


                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Full Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="customers_name" required autocomplete="OFF">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_phone1" class="col-sm-4 control-label">Phone-1</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="customers_phone1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_phone2" class="col-sm-4 control-label">Phone-2</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="customers_phone2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_phone3" class="col-sm-4 control-label">Phone-3</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="customers_phone3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="customers_email" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="customers_email" autocomplete="OFF">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_address" class="col-sm-4 control-label">Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="customers_address" rows="4" cols="50" required autocomplete="OFF"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="customers_website" class="col-sm-4 control-label">Website</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="customers_website" required autocomplete="OFF">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_purpoes" class="col-sm-4 control-label">Purpoes</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="customers_purpoes" rows="3" cols="50" required autocomplete="OFF"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_renewal_date" class="col-sm-4 control-label">Renewal Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="customers_renewal_date" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i>
                    Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Edit Customer</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="customers_edit.php">
                    <input type="hidden" id="edit_customers_id" name="id">


                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">Full Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="edit_customers_name" name="customers_name" required autocomplete="OFF">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_phone1" class="col-sm-4 control-label">Phone-1</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" id="edit_customers_phone1" name="customers_phone1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_phone2" class="col-sm-4 control-label">Phone-2</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" id="edit_customers_phone2" name="customers_phone2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_phone3" class="col-sm-4 control-label">Phone-3</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" id="edit_customers_phone3" name="customers_phone3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_email" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="edit_customers_email" name="customers_email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_address" class="col-sm-4 control-label">Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="edit_customers_address" name="customers_address" rows="4" cols="50" required autocomplete="OFF"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="customers_website" class="col-sm-4 control-label">Website</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="edit_customers_website" name="customers_website">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_purpoes" class="col-sm-4 control-label">Purpoes</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="edit_customers_purpoes" name="customers_purpoes" rows="3" cols="50" required autocomplete="OFF"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customers_renewal_date" class="col-sm-4 control-label">Renewal Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="edit_customers_renewal_date" name="customers_renewal_date">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="customers_delete.php">
                    <input type="hidden" class="delete_customers_id" name="id">
                    <div class="text-center">
                        <h3>DELETE CUSTOMER</h3>
                        <h1 class="bold delete_customers_name"></h1>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>
                    Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- view  more -->
<div class="modal fade" id="view_more">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>view more...</b></h4>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="view_customers_name" class="col-sm-4 control-label">Full Name : </label>
                        <div class="col-sm-8">
                            <span id="view_customers_name"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="view_customers_phone2" class="col-sm-4 control-label">Phone-1 : </label>
                        <div class="col-sm-8">
                            <span id="view_customers_phone2"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="view_customers_phone3" class="col-sm-4 control-label">Phone-2 : </label>
                        <div class="col-sm-8">
                            <span id="view_customers_phone3"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="view_customers_email" class="col-sm-4 control-label">Email : </label>
                        <div class="col-sm-8">
                            <span id="view_customers_email"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="view_customers_address" class="col-sm-4 control-label">Address : </label>
                        <div class="col-sm-8">
                            <span id="view_customers_address"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="view_customers_website" class="col-sm-4 control-label">Website : </label>
                        <div class="col-sm-8">
                            <span id="view_customers_website"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="view_customers_purpoes" class="col-sm-4 control-label">Purpoes : </label>
                        <div class="col-sm-8">
                            <span id="view_customers_purpoes"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="view_customers_updated_date" class="col-sm-4 control-label"> Last Updated date : </label>
                        <div class="col-sm-8">
                            <span id="view_customers_updated_date"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="view_customers_created_date" class="col-sm-4 control-label">Created Date : </label>
                        <div class="col-sm-8">
                            <span id="view_customers_created_date"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>