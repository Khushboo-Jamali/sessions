<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
<style>

</style>
    <body>
<div class="container">

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input
                    type="text"
                    class="form-control"
                    name=""
                    id="email"
             
                />
              
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="text"
                    class="form-control"
                    name=""
                    id="pass"
                    placeholder=""
                />
            </div>

        <button
                type="submit"
                id="btn"
                class="btn btn-primary"
            >
                Submit
            </button>
</div>
        <span id='error' style="display: none ; background-color: brown;"></span>
        <script src="./jquery-3.7.1.min.js"></script>
      <script>
        $('#btn').click(()=>{
            let email=$('#email').val();
            let pass=$('#pass').val();
            console.log(email);
            
            $.ajax({
                url:'auth.php',
                method:'POST',
                data:{
                email:email,
                password:pass
                },
                success:(r)=>{
                    if (r == true) {
                        location.href ="index.php";
                        
                    }else{
                        console.log(r);
                        $('#error').slideDown('slow');
                        $('#error').html(r);

                        
                    }
                }
            });
        });
      </script>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
