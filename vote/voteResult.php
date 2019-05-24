<?php
/*暂用模块
 *由于数据库结构设计非常烂，所以暂时用这套。
 *查询比较多，写的很糟糕。甚至无法通过循环来输出。
 *太丢脸了OVO
 */
if ( $result = $conn->query( "SELECT COUNT(*) as alluser FROM voting_result" )->fetch_assoc() ) {
    $allUser = $result[ 'alluser' ];
} //参与了投票总人数统计。
if ( $result = $conn->query( "SELECT COUNT(*) as one FROM voting_result WHERE one='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $oneAll = $result[ 'one' ];
}
if ( $result = $conn->query( "SELECT COUNT(*) as two FROM voting_result WHERE two='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $twoAll = $result[ 'two' ];
}
if ( $result = $conn->query( "SELECT COUNT(*) as three FROM voting_result WHERE three='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $threeAll = $result[ 'three' ];
}
if ( $result = $conn->query( "SELECT COUNT(*) as four FROM voting_result WHERE four='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $fourAll = $result[ 'four' ];
}
if ( $result = $conn->query( "SELECT COUNT(*) as five FROM voting_result WHERE five='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $fiveAll = $result[ 'five' ];
}
if ( $result = $conn->query( "SELECT COUNT(*) as six FROM voting_result WHERE six='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $sixAll = $result[ 'six' ];
}
if ( $result = $conn->query( "SELECT COUNT(*) as seven FROM voting_result WHERE seven='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $sevenAll = $result[ 'seven' ];
}
if ( $result = $conn->query( "SELECT COUNT(*) as eight FROM voting_result WHERE eight='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $eightAll = $result[ 'eight' ];
}
if ( $result = $conn->query( "SELECT COUNT(*) as nine FROM voting_result WHERE nine='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $nineAll = $result[ 'nine' ];
}
if ( $result = $conn->query( "SELECT COUNT(*) as ten FROM voting_result WHERE ten='true' AND vote_id='$vote_id'" )->fetch_assoc() ) {
    $tenAll = $result[ 'ten' ];
}
?>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['one'];echo $oneAll."/".$allUser;?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $oneAll/$allUser*100;?>%"></div>
        </div>
    </div>
</div>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['two'];echo $twoAll."/".$allUser;?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $twoAll/$allUser*100;?>%"></div>
        </div>
    </div>
</div>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['three'];echo $threeAll."/".$allUser;?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $threeAll/$allUser*100;?>%"></div>
        </div>
    </div>
</div>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['four'];echo $fourAll."/".$allUser;?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $fourAll/$allUser*100;?>%"></div>
        </div>
    </div>
</div>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['five'];echo $fiveAll."/".$allUser;?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $fiveAll/$allUser*100;?>%"></div>
        </div>
    </div>
</div>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['six'];echo $sixAll."/".$allUser;?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $sixAll/$allUser*100;?>%"></div>
        </div>
    </div>
</div>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['seven'];?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $sevenAll/$allUser*100;?>%">
                <?php echo $sevenAll."/".$allUser;?>
            </div>
        </div>
    </div>
</div>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['eight'];echo $eightAll."/".$allUser;?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $eightAll/$allUser*100;?>%"></div>
        </div>
    </div>
</div>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['nine'];echo $nineAll."/".$allUser;?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $nineAll/$allUser*100;?>%"></div>
        </div>
    </div>
</div>
<div class="card bg-light text-break">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['ten'];echo $tenAll."/".$allUser;?>
        </h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $tenAll/$allUser*100;?>%"></div>
        </div>
    </div>
</div>
<br/>
<button type="button" class="btn btn-primary btn-block" onclick="window.location.href='items.php'">返回</button>