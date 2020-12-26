<!DOCTYPE html>  
 <html>  
      <head>  
           <title>HTML to Word</title>  
            @include('include.css')
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:800px;">  
                <br />  
                <h3 align="center">The Big Title</h3>  
                <br />  
                <form method="post" action="testdoct">  
                {{ csrf_field() }}
                     <label>Enter Title</label>  
                     <input type="text" name="heading" class="form-control" />  
                     <br />  
                     <label>Enter Description in HTML Formate</label>  
                     <textarea name="description" class="form-control" rows="10"></textarea>  
                     <br />  
                     <input type="submit" name="create_word" class="btn btn-info" value="Export to Doc" />  
                </form>  
           </div>  
      </body>  
 </html> 