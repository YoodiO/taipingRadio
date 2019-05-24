<form id="voteForm">
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="one" name="vote[one]">
                <label class="custom-control-label" for="one">
                    <?php echo $row['one']?>
                </label>
            </div>
        </div>
    </div>
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="two" name="vote[two]">
                <label class="custom-control-label" for="two">
                    <?php echo $row['two']?>
                </label>
            </div>
        </div>
    </div>
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="three" name="vote[three]">
                <label class="custom-control-label" for="three">
                    <?php echo $row['three']?>
                </label>
            </div>
        </div>
    </div>
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="four" name="vote[four]">
                <label class="custom-control-label" for="four">
                    <?php echo $row['four']?>
                </label>
            </div>
        </div>
    </div>
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="five" name="vote[five]">
                <label class="custom-control-label" for="five">
                    <?php echo $row['five']?>
                </label>
            </div>
        </div>
    </div>
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="six" name="vote[six]">
                <label class="custom-control-label" for="six">
                    <?php echo $row['six']?>
                </label>
            </div>
        </div>
    </div>
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="seven" name="vote[seven]">
                <label class="custom-control-label" for="seven">
                    <?php echo $row['seven']?>
                </label>
            </div>
        </div>
    </div>
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="eight" name="vote[eight]">
                <label class="custom-control-label" for="eight">
                    <?php echo $row['eight']?>
                </label>
            </div>
        </div>
    </div>
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="nine" name="vote[nine]">
                <label class="custom-control-label" for="nine">
                    <?php echo $row['nine']?>
                </label>
            </div>
        </div>
    </div>
    <div class="card bg-light text-break">
        <div class="card-body">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="ten" name="vote[ten]">
                <label class="custom-control-label" for="ten">
                    <?php echo $row['ten']?>
                </label>
            </div>
        </div>
    </div><input type="hidden" name="vote_id" value="<?php echo $vote_id?>">
</form>
<br/>
<button type="button" class="btn btn-success btn-block" id="voteButton" data-toggle="modal" data-target="#Return">投票</button>
<button type="button" class="btn btn-primary btn-block" onclick="window.location.href='items.php'">返回</button>