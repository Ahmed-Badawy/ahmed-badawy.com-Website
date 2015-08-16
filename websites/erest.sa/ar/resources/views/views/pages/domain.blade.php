@extends("views.-layout")


@section("content")
<!--  Domain Search -->
    <section class="domains">
        <div class="row">
            <div class="col-sm-12">
                <h2>ابحث عن نطاقك</h2>
                <hr class="small" />
                
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 com-md-8 center-block">

                <form class="form-inline domainsearch" method="post" action="#">
                    <div class="row no-gutter">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sld" onfocus="if (this.value == 'Enter your domain') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your domain';}" value="Enter your domain" />
                        </div>
                        <div class="col-sm-2">
                            <select name="tld" class="form-control">
                                <option>.com</option>
                                <option>.net</option>
                                <option>.org</option>
                                <option>.eu</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary" style="width:100%">SEARCH</button>
                        </div>

                    </div>
                </form>


                <div id="domainextensions">
                    <div class="item">
                        <div class="extension">.com</div>
                    </div>

                    <div class="item">
                        <div class="extension">.net</div>
                    </div>

                    <div class="item">
                        <div class="extension">.rocks</div>
                    </div>

                    <div class="item">
                        <div class="extension">.org</div>
                    </div>

                    <div class="item">
                        <div class="extension">.ninja</div>
                    </div>

                    <div class="item">
                        <div class="extension">.co</div>
                    </div>

                    <div class="item">
                        <div class="extension">.haus</div>
                    </div>

                    <div class="item">
                        <div class="extension">.social</div>
                    </div>

                    <div class="item">
                        <div class="extension">.bio</div>
                    </div>

                    <div class="item">
                        <div class="extension">.house</div>
                    </div>

                    <div class="item">
                        <div class="extension">.deals</div>
                    </div>

                    <div class="item">
                        <div class="extension">.market</div>
                    </div>

                    <div class="item">
                        <div class="extension">.discount</div>
                    </div>

                    <div class="item">
                        <div class="extension">.fitness</div>
                    </div>

                    <div class="item">
                        <div class="extension">.furniture</div>
                    </div>

                    <div class="item">
                        <div class="extension">.tax</div>
                    </div>

                    <div class="item">
                        <div class="extension">.investments</div>
                    </div>

                    <div class="item">
                        <div class="extension">.fund</div>
                    </div>

                    <div class="item">
                        <div class="extension">.cash</div>
                    </div>

                    <div class="item">
                        <div class="extension">.actor</div>
                    </div>

                    <div class="item">
                        <div class="extension">.surgery</div>
                    </div>

                    <div class="item">
                        <div class="extension">.rip</div>
                    </div>

                    <div class="item">
                        <div class="extension">.forsale</div>
                    </div>

                    <div class="item">
                        <div class="extension">.com</div>
                    </div>

                    <div class="item">
                        <div class="extension">.coach</div>
                    </div>

                    <div class="item">
                        <div class="extension">.memorial</div>
                    </div>

                    <div class="item">
                        <div class="extension">.energy</div>
                    </div>

                    <div class="item">
                        <div class="extension">.band</div>
                    </div>

                    <div class="item">
                        <div class="extension">.com</div>
                    </div>

                    <div class="item">
                        <div class="extension">.legal</div>
                    </div>

                    <div class="item">
                        <div class="extension">.money</div>
                    </div>

                    <div class="item">
                        <div class="extension">.delivery</div>
                    </div>

                    <div class="item">
                        <div class="extension">.space</div>
                    </div>

                    <div class="item">
                        <div class="extension">.camera</div>
                    </div>

                    <div class="item">
                        <div class="extension">.app</div>
                    </div>

                    <div class="item">
                        <div class="extension">.wow</div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    
    <!-- End of Domain Search -->


   <section class="domainfeatures white">

        <div class="row">
            <div class="col-sm-12">
                <h2>قائمة النطاقات</h2>
                <p>يمكنك تجديد او حجز او نقل نطاقك من خلال إنجاز لتقنية المعلومات </p>
            </div>
        </div>

        <div class="domains-table">
            <div class="row">
                <div class="col-sm-12">
                    <table data-wow-delay="0.3s" id="tld-table" class="tablesorter responsive wow fadeInUp tablesaw tablesaw-stack" data-mode="stack">
                        <thead>
                            <tr>
                                
                                <th>الامتداد </th>
                                <th>نقل </th>
                                <th>حجز</th>
                                <th>تجديد</th>
                                <th>الحد الادني للسنين</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                 
                                <td>COM</td>
                                <td>$12  </td>
                                <td>$12  </td>
                                <td>$12  </td>
                                <td>1-10 yrs</td>
                                
                            </tr>
                            <tr>
                                 
                                <td>NET</td>
                                <td>$12  </td>
                                <td>$12  </td>
                                <td>$12  </td>
                                <td>1-5 yrs</td>
                                
                            </tr>
                            <tr>
                                 
                                <td>ORG</td>
                                <td>$12  </td>
                                <td>$12  </td>
                                <td>$12  </td>
                                <td>1-10 yrs</td>
                                
                            </tr>
                            <tr>
                                 
                                <td>BIZ</td>
                                <td>$12  </td>
                                <td>$12  </td>
                                <td>$12  </td>
                                <td>1-10 yrs</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection