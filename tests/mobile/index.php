
<?php

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();


echo $deviceType;
echo "<br>";
echo $scriptVersion;
echo "<br>";

?>




    <h1>Supported methods</h1>
    <table cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <th colspan="2">Basic detection methods</th>
        </tr>
        <tr>
            <td>isMobile()</td><td <?php $check = $detect->isMobile(); if($check): ?>class="true"<?php endif; ?>><?php var_dump($check); ?></td>
        </tr>
        <tr>
            <td>isTablet()</td><td <?php $check = $detect->isTablet(); if($check): ?>class="true"<?php endif; ?>><?php var_dump($check); ?></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <th colspan="2">Custom detection methods</th>
        </tr>
        <?php foreach($detect->getRules() as $name => $regex):
                        $check = $detect->{'is'.$name}();
        ?>
            <tr>
                    <td>is<?php echo $name; ?>()</td>
                    <td <?php if($check): ?>class="true"<?php endif; ?>><?php var_dump($check); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tbody>
            <tr>
                <th colspan="2">Experimental version() method</th>
            </tr>
            <?php
            foreach($detect->getProperties() as $name => $match):
                $check = $detect->version($name);
                if($check!==false):
            ?>
            <tr>
                <td>version(<?php echo $name; ?>)</td>
                <td><?php var_dump($check); ?></td>
            </tr>
            <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
        <tbody>
            <tr>
                <th colspan="2">Other tests</th>
            </tr>
            <tr>
                <td>isiphone()</td>
                <td><?php var_dump($detect->isiphone()); ?></td>
            </tr>
            <tr>
                <td>isIphone()</td>
                <td><?php var_dump($detect->isIphone()); ?></td>
            </tr>
            <tr>
                <td>istablet()</td>
                <td><?php var_dump($detect->istablet()); ?></td>
            </tr>
            <tr>
                <td>isIOS()</td>
                <td><?php var_dump($detect->isIOS()); ?></td>
            </tr>
            <tr>
                <td>isWhateverYouWant()</td>
                <td class="randomcrap"><?php var_dump($detect->isWhateverYouWant()); ?></td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <th colspan="2">Debug</th>
            </tr>
            <tr>
                <td>Matching Regex</td>
                <td><?php var_dump($detect->getMatchingRegex()); ?></td>
            </tr>
            <tr>
                <td>Matching Array</td>
                <td><?php var_dump($detect->getMatchesArray()); ?></td>
            </tr>
        </tbody>
    </table>


