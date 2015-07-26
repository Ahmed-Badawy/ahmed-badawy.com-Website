<div class="container">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12">
                <div class="photo-gallry">

                    <h3>معرض الصور</h3>
                    <p>تعرف على جميع تصميمات الارياف المميزة </p>

                    @foreach($photos as $item)
                    <div class="col-md-3">
                        <div class='demonstrations'>
                            <a href='{{ get_it('site-imgs/_CMS/photo-gallary/'.$item->img)}}'  class='lightview' data-lightview-group='example' data-lightview-title="" data-lightview-caption="">
                                <img src='{{ get_it('site-imgs/_CMS/photo-gallary/'.$item->img)}}' alt=''/>
                            </a>
                        </div>
                    </div>
                    @endforeach





                </div>
            </div>



        </div>
    </div>





</div>