<h3>Provide Information</h3>
<div id="form-block">
    <form method="POST" action="process/process_prod.php?action=newproduct">
        <div id="form-block-center">
            <label for="fname">Product Name</label>
            <input type="text" id="pname" class="input" name="pname" placeholder="Product name..">

            <label for="lname">Description</label>
            <input id="desc" class="input" name="desc" placeholder="Description..">
            
            <label for="fname">Product Retail Price</label>
            <input type="text" id="price" class="input" name="price" placeholder="Product price..">

            <label for="ptype">Type</label>
            <select id="ptype" name="ptype">
            <option value="Feeds">Feeds</option>
              <option value="Kenel">Kenel</option>
              <option value="Manager">Pet Soap</option>
            </select>
              </div>
        <div id="button-block">
        <input type="submit" value="Save">
        </div>
  </form>
</div>