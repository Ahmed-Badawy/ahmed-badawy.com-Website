
          <div class='row' id='content-wrapper' ng-app='myApp'>
            <div class='col-xs-12' ng-controller='todo_controller'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-comments'></i>
                      <span>Todo list</span>
                    </h1>
                    <div class='pull-right'>
                      <ul class='breadcrumb'>
                        <li>
                          <a href='index.html'>
                            <i class='icon-bar-chart'></i>
                          </a>
                        </li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li>Components</li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li class='active'>Todo list</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class='alert alert-info alert-dismissable'>
                <a class='close' data-dismiss='alert' href='#'>&times;</a>
                <strong>Hey there!</strong>
                Items in todo list can be reordered by drag & drop, you can mark them as important, complete, or you can delete them!
                <i class='icon-smile'></i>
              </div>


<h3 class='text-center h1 alert alert-danger arabic'>معذرة! هذه الخدمة غير مجهزة للعمل بعد...</h3>


              <div class='row'>
                <div class='col-sm-12'>
                  <div class='box'>
                    <div class='row todo-list'>
                      <div class='col-sm-12'>
                        <div class='box'>
                          <div class='box-content box-no-padding'>
                            <div class='sortable-container'>
                                        <form class="new-todo" method="post" action="#" accept-charset="UTF-8"><input name="authenticity_token" type="hidden" /><input class='form-control' id='todo_name' name='todo[name]' placeholder='Type your new todo here...' type='text'>
                              <button class='btn btn-success' type='submit'>
                                <i class='icon-plus'></i>
                              </button>
                              </form>
                    



                              <!-- <div class='date text-contrast'>Today</div> -->
                              <ul class='list-unstyled sortable' data-sortable-axis='y' data-sortable-connect='.sortable'>
                                

<!--                                 <li class='important item'>
                                  <label class='check pull-left todo'>
                                    <input type='checkbox'>
                                    <span>Neque sed nemo</span>
                                  </label>
                                  <div class='actions pull-right'>
                                    <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                      <i class='icon-pencil'></i>
                                    </a>
                                    <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                      <i class='icon-remove'></i>
                                    </a>
                                    <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                      <i class='icon-bookmark-empty'></i>
                                    </a>
                                  </div>
                                </li> -->

<!--                                 <li class='item'>
                                  <label class='check pull-left todo'>
                                    <input type='checkbox'>
                                    <span>Molestiae rem est asdf asdfasdf adf</span>
                                  </label>
                                  <div class='actions pull-right'>
                                    <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                      <i class='icon-pencil'></i>
                                    </a>
                                    <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                      <i class='icon-remove'></i>
                                    </a>
                                    <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                      <i class='icon-bookmark-empty'></i>
                                    </a>
                                  </div>
                                </li> -->




                                <li ng-repeat='n in todos' class='item'>
                                  <label class='check pull-left todo'>
                                    <input type='checkbox'>
                                    <span>@{{n.txt}}</span>
                                  </label>
                                  <div class='actions pull-right'>
                                    <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                      <i class='icon-pencil'></i>
                                    </a>
                                    <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                      <i class='icon-remove'></i>
                                    </a>
                                    <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                      <i class='icon-bookmark-empty'></i>
                                    </a>
                                  </div>
                                </li>



<!-- 
                                <li class='done item'>
                                  <label class='check pull-left todo'>
                                    <input checked='checked' type='checkbox'>
                                    <span>Eum ut consequatur</span>
                                  </label>
                                  <div class='actions pull-right'>
                                    <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                      <i class='icon-pencil'></i>
                                    </a>
                                    <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                      <i class='icon-remove'></i>
                                    </a>
                                    <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                      <i class='icon-bookmark-empty'></i>
                                    </a>
                                  </div>
                                </li>
                                <li class='item'>
                                  <label class='check pull-left todo'>
                                    <input type='checkbox'>
                                    <i class='icon-envelope-alt'></i>
                                    <span>Inventore consequatur perferendis modi</span>
                                  </label>
                                  <div class='actions pull-right'>
                                    <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                      <i class='icon-pencil'></i>
                                    </a>
                                    <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                      <i class='icon-remove'></i>
                                    </a>
                                    <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                      <i class='icon-bookmark-empty'></i>
                                    </a>
                                  </div>
                                </li> -->

                              </ul>



                              <!-- <div class='date text-contrast'>Due Wed, Sep 19, 2013</div> -->
                            <!--   <ul class='list-unstyled sortable' data-sortable-axis='y' data-sortable-connect='.sortable'>
                                <li class='item'>
                                  <label class='check pull-left todo'>
                                    <input type='checkbox'>
                                    <span>Fugiat iure aspernatur explicabo placeat</span>
                                  </label>
                                  <div class='actions pull-right'>
                                    <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                      <i class='icon-pencil'></i>
                                    </a>
                                    <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                      <i class='icon-remove'></i>
                                    </a>
                                    <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                      <i class='icon-bookmark-empty'></i>
                                    </a>
                                  </div>
                                </li>
                                <li class='important item'>
                                  <label class='check pull-left todo'>
                                    <input type='checkbox'>
                                    <span>Et ex et quos rerum</span>
                                  </label>
                                  <div class='actions pull-right'>
                                    <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                      <i class='icon-pencil'></i>
                                    </a>
                                    <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                      <i class='icon-remove'></i>
                                    </a>
                                    <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                      <i class='icon-bookmark-empty'></i>
                                    </a>
                                  </div>
                                </li>
                                <li class='item'>
                                  <label class='check pull-left todo'>
                                    <input type='checkbox'>
                                    <span>Ut natus id ut expedita</span>
                                  </label>
                                  <div class='actions pull-right'>
                                    <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                      <i class='icon-pencil'></i>
                                    </a>
                                    <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                      <i class='icon-remove'></i>
                                    </a>
                                    <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                      <i class='icon-bookmark-empty'></i>
                                    </a>
                                  </div>
                                </li>
                                <li class='item'>
                                  <label class='check pull-left todo'>
                                    <input type='checkbox'>
                                    <span>Dignissimos aut voluptatem deleniti deserunt</span>
                                  </label>
                                  <div class='actions pull-right'>
                                    <a class='btn btn-link edit has-tooltip' data-placement='top' href='#' title='Edit todo'>
                                      <i class='icon-pencil'></i>
                                    </a>
                                    <a class='btn btn-link remove has-tooltip' data-placement='top' href='#' title='Remove todo'>
                                      <i class='icon-remove'></i>
                                    </a>
                                    <a class='btn btn-link important has-tooltip' data-placement='top' href='#' title='Mark as important'>
                                      <i class='icon-bookmark-empty'></i>
                                    </a>
                                  </div>
                                </li>
                              </ul> -->



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






    <script>
      $(".todo-list .new-todo").live('submit', function(e) {
        var li, todo_name;
        todo_name = $(this).find("#todo_name").val();
        $(this).find("#todo_name").val("");
        if (todo_name.length !== 0) {
          li = $(this).parents(".todo-list").find("li.item").first().clone();
          li.find("input[type='checkbox']").attr("checked", false);
          li.removeClass("important").removeClass("done");
          li.find("label.todo span").text(todo_name);
          $(".todo-list ul").first().prepend(li);
          li.effect("highlight", {}, 500);
        }
        return e.preventDefault();
      });
      
      $(".todo-list .actions .remove").live("click", function(e) {
        $(this).tooltip("hide");
        $(this).parents("li").fadeOut(500, function() {
          return $(this).remove();
        });
        e.stopPropagation();
        e.preventDefault();
        return false;
      });
      
      $(".todo-list .actions .important").live("click", function(e) {
        $(this).parents("li").toggleClass("important");
        e.stopPropagation();
        e.preventDefault();
        return false;
      });
      
      $(".todo-list .check").live("click", function() {
        var checkbox;
        checkbox = $(this).find("input[type='checkbox']");
        if (checkbox.is(":checked")) {
          return $(this).parents("li").addClass("done");
        } else {
          return $(this).parents("li").removeClass("done");
        }
      });
    </script>