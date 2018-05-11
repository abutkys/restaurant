<script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('a.cart').click(function () {
                var dish_id = $(this).data('id');
                var url = "/cart";
                console.log(dish_id);

                $.ajax({
                    type:'Post',
                    url: url,
                    data:{id:dish_id},
                    dataType:'json',
                    success: function (data) {
                        console.log(data);
                        $('#totalQty').html(data.totalQty);
                    },
                    error: function (data){
                        console.log('Error:', data);
                    }

                });
            });
        });
    </script>
