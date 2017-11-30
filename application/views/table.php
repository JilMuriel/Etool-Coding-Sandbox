<div class="table movable card shadow">
          <div class="p-2 border">
            <p class="mb-0 pb-0 d-inline-block accent"><strong>tbl_users</strong></p>
            <a class="d-inline-block" data-toggle="collapse" href="#edit-table_name" aria-expanded="false" aria-controls="edit-table_name"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a data-toggle="modal" data-target="#exampleModal"><i class="fa fa-times d-inline-block float-right" aria-hidden="true"></i></a>
            <div class="collapse" id="edit-table_name">
                <div class="field-form form-group mt-2 ">
                  <input type="text" class="form-control p-1 ml-0 mr-0" placeholder="Title" value="tbl_users">
                  <textarea class="form-control mt-2" placeholder="Description"></textarea>
                </div>
              <button class="mt-2 mb-1 btn btn-outline-primary d-inline-block w-100 pt-1 pb-1">Save</button>
              <button class="btn btn-outline-secondary d-inline-block w-100 pt-1 pb-1" data-toggle="collapse" href="#edit-table_name" aria-expanded="false" aria-controls="add_field">Cancel</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove Table</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   Proceed to remove this table?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Remove</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="pt-1 pl-2 pr-2">
            <ul id="sortable" class="list-group ">
              <div class="mt-1">
                <small>      
                <li class="list-group-item pt-1 pb-1 border pl-2 pr-2">
                    <p class="d-inline-block mb-0 pb-0" >user_id</p>
                    <p class="d-inline-block mb-0 pb-0 pl-4" >Int(11)</p>
                    <a class="d-inline-block float-right"  data-toggle="collapse" href="#edit_field1" aria-expanded="false" aria-controls="edit_field1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <!-- info -->
                  <div class="field-box collapse" id="edit_field1">
                    <div class="pt-3">
                      <h6><small><strong>Update field</strong></small></h6>
                      <div class="field-form form-group ">
                        <input type="text" class="form-control p-1 ml-0 mr-0" placeholder="Field name" value="user_id">
                      </div>
                      <select class="pl-0 field-form form-control form-control-sm mt-1">
                          <option hidden>Type</option>
                          <option value="2">CHARACTER</option>
                          <option>VARCHAR</option>
                          <option>BOOLEAN</option>
                          <option>SMALLINT</option>
                          <option selected="selected">INTEGER</option>
                          <option>DECIMAL</option>
                          <option>NUMERI</option>
                          <option>REAL</option>
                          <option>FLOAT</option>
                          <option>DOUBLE PRECISION</option>
                          <option>DATE</option>
                          <option>TIME</option>
                          <option>TIMESTAMP</option>
                          <option>CLOB</option>
                          <option>BLOB</option>
                      </select>
                      <div class="field-form form-group ">
                        <input type="text" class="form-control mt-1 p-1 ml-0 mr-0" placeholder="Size" value="11">
                      </div>
                      <div class="pl-2">
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="" checked>
                            <small>Primary key</small>

                          </label>
                        </div>
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="" checked>
                            <small>Allow null</small>
                          </label>
                        </div>
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="">
                            <small>Unique</small>
                          </label>
                        </div>
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="" checked>
                            <small>Auto incriment</small>
                          </label>
                        </div>

                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="">
                            <small>Foreign key</small>
                          </label>
                        </div>
                      </div>

                    </div>
                    <button class="mt-2 mb-1 btn btn-outline-primary d-inline-block w-100 pt-1 pb-1">Update</button>
                    <button class="btn btn-outline-secondary d-inline-block w-100 pt-1 pb-1" data-toggle="collapse" href="#edit_field1" aria-expanded="false" aria-controls="add_field">Cancel</button>
                  </div>


                </li>
              </div>
              <div class="mt-1">
    
                <li id="sortable" class="list-group-item pt-1 pb-1 border pl-2 pr-2">    
                    <p class="d-inline-block mb-0 pb-0" >username</p>
                    <p class="d-inline-block mb-0 pb-0 pl-4" >Varchar(45)</p>
                    <a class="d-inline-block float-right"  data-toggle="collapse" href="#edit_field2" aria-expanded="false" aria-controls="edit_field2"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <!-- info -->
                  <div class="field-box collapse" id="edit_field2">
                    <div class="pt-3">
                      <h6><small><strong>Update field</strong></small></h6>
                      <div class="field-form form-group ">
                        <input type="text" class="form-control p-1 ml-0 mr-0" placeholder="Field name" value="username">
                      </div>
                      <select class="pl-0 field-form form-control form-control-sm mt-1">
                          <option hidden>Type</option>
                          <option>CHARACTER</option>
                          <option selected="selected">VARCHAR</option>
                          <option>BOOLEAN</option>
                          <option>SMALLINT</option>
                          <option>INTEGER</option>
                          <option>DECIMAL</option>
                          <option>NUMERI</option>
                          <option>REAL</option>
                          <option>FLOAT</option>
                          <option>DOUBLE PRECISION</option>
                          <option>DATE</option>
                          <option>TIME</option>
                          <option>TIMESTAMP</option>
                          <option>CLOB</option>
                          <option>BLOB</option>
                      </select>
                      <div class="field-form form-group ">
                        <input type="text" class="form-control mt-1 p-1 ml-0 mr-0" placeholder="Size" value="45">
                      </div>
                      <div class="pl-2">
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="" checked>
                            <small>Primary key</small>

                          </label>
                        </div>
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="" checked>
                            <small>Allow null</small>
                          </label>
                        </div>
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="">
                            <small>Unique</small>
                          </label>
                        </div>
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="" checked>
                            <small>Auto incriment</small>
                          </label>
                        </div>

                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="">
                            <small>Foreign key</small>
                          </label>
                        </div>
                      </div>

                    </div>
                    <button class="mt-2 mb-1 btn btn-outline-primary d-inline-block w-100 pt-1 pb-1">Update</button>
                    <button class="btn btn-outline-secondary d-inline-block w-100 pt-1 pb-1" data-toggle="collapse" href="#edit_field2" aria-expanded="false" aria-controls="add_field">Cancel</button>
                  </div>
                </li>
              </div>

              <div class="mt-1">
                 
                <li id="sortable" class="list-group-item pt-1 pb-1 border pl-2 pr-2">
                    <p class="d-inline-block mb-0 pb-0" >password</p>
                    <p class="d-inline-block mb-0 pb-0 pl-4" >Varchar(45)</p>
                    <a class="d-inline-block float-right"  data-toggle="collapse" href="#edit_field3" aria-expanded="false" aria-controls="edit_field3"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <!-- info -->
                  <div class="field-box collapse" id="edit_field3">
                    <div class="pt-3">
                      <h6><small><strong>Update field</strong></small></h6>
                      <div class="field-form form-group ">
                        <input type="text" class="form-control p-1 ml-0 mr-0" placeholder="Field name" value="user_id">
                      </div>
                      <select class="pl-0 field-form form-control form-control-sm mt-1">
                          <option hidden>Type</option>
                          <option>CHARACTER</option>
                          <option selected="selected">VARCHAR</option>
                          <option>BOOLEAN</option>
                          <option>SMALLINT</option>
                          <option >INTEGER</option>
                          <option>DECIMAL</option>
                          <option>NUMERI</option>
                          <option>REAL</option>
                          <option>FLOAT</option>
                          <option>DOUBLE PRECISION</option>
                          <option>DATE</option>
                          <option>TIME</option>
                          <option>TIMESTAMP</option>
                          <option>CLOB</option>
                          <option>BLOB</option>
                      </select>
                      <div class="field-form form-group ">
                        <input type="text" class="form-control mt-1 p-1 ml-0 mr-0" placeholder="Size" value="45">
                      </div>
                      <div class="pl-2">
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="">
                            <small>Primary key</small>

                          </label>
                        </div>
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="" checked>
                            <small>Allow null</small>
                          </label>
                        </div>
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="">
                            <small>Unique</small>
                          </label>
                        </div>
                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="">
                            <small>Auto incriment</small>
                          </label>
                        </div>

                        <div>
                          <label class="form-check-label mt-1">
                            <input class="form-check-input mt-1" type="checkbox" value="">
                            <small>Foreign key</small>
                          </label>
                        </div>
                      </div>

                    </div>
                    <button class="mt-2 mb-1 btn btn-outline-primary d-inline-block w-100 pt-1 pb-1">Update</button>
                    <button class="btn btn-outline-secondary d-inline-block w-100 pt-1 pb-1" data-toggle="collapse" href="#edit_field3" aria-expanded="false" aria-controls="add_field">Cancel</button>
                  </div>
                </li>
                </>
              </div>

            
            </ul>
          </div>
          <div class="pt-2 pb-2 pl-2 pr-2">
            <button class="btn btn-primary w-100 pt-1 pb-1" data-toggle="collapse" href="#add_field" aria-expanded="false" aria-controls="add_field"><i class="text-light fa fa-plus" aria-hidden="true"></i></button>

            <div class="field-box collapse" id="add_field">
              <div class="pt-3">
                <h6><small><strong>New Field</strong></small></h6>
                <div class="field-form form-group ">
                  <input type="text" class="form-control p-1 ml-0 mr-0" placeholder="Field name">
                </div>
                <select class="pl-0 field-form form-control form-control-sm mt-1">
                    <option hidden>Type</option>
                    <option>CHARACTER</option>
                    <option>VARCHAR</option>
                    <option>BOOLEAN</option>
                    <option>SMALLINT</option>
                    <option>INTEGER</option>
                    <option>DECIMAL</option>
                    <option>NUMERI</option>
                    <option>REAL</option>
                    <option>FLOAT</option>
                    <option>DOUBLE PRECISION</option>
                    <option>DATE</option>
                    <option>TIME</option>
                    <option>TIMESTAMP</option>
                    <option>CLOB</option>
                    <option>BLOB</option>
                </select>
                <div class="field-form form-group ">
                  <input type="text" class="form-control mt-1 p-1 ml-0 mr-0" placeholder="Size">
                </div>
                <div class="pl-2">
                  <div>
                    <label class="form-check-label mt-1">
                      <input class="form-check-input mt-1" type="checkbox" value="">
                      <small>Primary key</small>
                    </label>
                  </div>
                  <div>
                    <label class="form-check-label mt-1">
                      <input class="form-check-input mt-1" type="checkbox" value="">
                      <small>Allow null</small>
                    </label>
                  </div>
                  <div>
                    <label class="form-check-label mt-1">
                      <input class="form-check-input mt-1" type="checkbox" value="">
                      <small>Unique</small>
                    </label>
                  </div>
                  <div>
                    <label class="form-check-label mt-1">
                      <input class="form-check-input mt-1" type="checkbox" value="">
                      <small>Auto incriment</small>
                    </label>
                  </div>

                  <div>
                    <label class="form-check-label mt-1">
                      <input class="form-check-input mt-1" type="checkbox" value="">
                      <small>Foreign key</small>
                    </label>
                  </div>
                </div>

              </div>
              <button class="mt-2 mb-1 btn btn-dark d-inline-block w-100 pt-1 pb-1">Add</button>
              <button class="btn btn-default d-inline-block w-100 pt-1 pb-1" data-toggle="collapse" href="#add_field" aria-expanded="false" aria-controls="add_field">Cancel</button>
            </div>
          </div>
         </div>