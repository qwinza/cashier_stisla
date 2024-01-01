@extends('layouts.master')
<div>
    <div class="card">
        <div class="card-header">
            <h4>Input Product</h4>
        </div>
        <div class="card-body">
            <form class="form-inline">
                <label class="sr-only" for="inlineFormInputName2">Name Product</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                <select class="form-control">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" id="quantity" placeholder="Quantity">
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                </div>
            </form>
        </div>
    </div>
</div>

