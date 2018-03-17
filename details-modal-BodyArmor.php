<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center">Fox Titan Upper Body Armor</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-blocker">
                <img src="images/bodyarmor.jpg" alt="Body Armor" class="details img-responsive" />
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Details</h4>
              <p>Don't get bitten! This lightweight and flexible body armor will provide you with protections from those bitey boys while allowing you the freedom to make a quick escape! Don't skimp on this, it could save your life!</p>
              <hr />
              <p>Price: $199.95</p>
              <p>Brand: Fox</p>
              <form action="add_cart.php" method="post">
                <div class="form-group">
                  <div class="col-xs-3">
                    <label for="quantity" id="quantity-label">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" />
                  </div><br /><br /><br />
                  <div class="form-group">
                    <label for="size">Size:</label>
                    <select name="size" id="size" class="form-control">
                      <option value=""></option>
                      <option value="small">Small</option>
                      <option value="medium">Medium</option>
                      <option value="large">Large</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
      </div>
    </div>
  </div>
</div>
