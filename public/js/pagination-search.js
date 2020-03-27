$(document).ready(function(){
    filter_posts();
    function filter_posts(){
        var search=$("#search").val();

        $.ajax({
            url: window.location,
            method: "GET",
            data:{
                _token: $("input[name='_token']").val(),
                search: search
            },
            dataType: "json",
            success: function(data){
                show(data[0]);
                showPagination(data[0].slice(-1)[0][0].num);
            },
            error: function(error){
                $("#posts").html(` <div class="alert alert-warning">
                There is no data for these parameters.
            </div>`);
            }
        });
    }



        $("#search").keyup(function(){
            filter_posts();
        });

    function show(data){
        let html="";
        for(let p of data){
            var text=p.text;
            var res=text.substring(0,130);
            html+=` <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="#" class="block-20" style="background-image: url("/images/${p.path_new}");">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                       <span class="mos">${p.updated_at}</span>

                        </div>
                        <h3 class="heading mb-3"><a href="posts/${p.id}">${p.title}</a></h3>

                        <p>${res} ...</p>
                        <p><a href="posts/${p.id}" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
                    </div>
                </div>
            </div>`;
        }
        $("#posts").html(html);
    }

    function showPagination(countPosts){
        let perPage=5;
        let pages=parseInt(countPosts)/perPage;
        let html=`  <li><a class="link" href="#" data-id="1"> << </a></li>`;
        for(let i=1; i<pages+1;i++){
            html+=`  <li><a class="link" href="#" data-id="i">i</a></li>`;
        }
        html+=`<li><a class="link" href="#" data-id="Math.round(pages)"> >> </a></li>`;

        $("#links").html(html);


        $(".link").click(function(e){
            e.preventDefault();

            var search=$("#search").val();

            var paginate=$(this).data("id");

            var pag=parseInt(paginate);

            $.ajax({
                url:window.location,
                method: "GET",
                data: {
                    _token: $("input[name='_token']").val(),
                    page: pag,
                    search: search
                },
                dataType: "json",
                success: function(data){
                    show(data[0]);
                }
            });
        });

    }




});