@extends('MainLayouts.app')
@section('content')

<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

    <!-- 
				<div class="section topmargin-lg"> -->
  
      </div>
  </div>

</section><!-- #content end -->

              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->






<script type="text/javascript">
$(document).ready(function() {
setTimeout(function() {
$("#myModal").modal('show');
setTimeout(function() {
$("#myModal").modal('hide');
}, 30000)
}, 2000)
});
</script>




@endsection