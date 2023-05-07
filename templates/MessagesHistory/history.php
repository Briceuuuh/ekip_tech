<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\MessagesHistory> $messagesHistory
 */
?>

<div class="container">
    <div style="flex-direction: row">
        <h1>Votre Historique</h1>
    </div>
    <?php foreach ($messagesHistory as $message): ?>
	<div class="bubbleWrapper">
		<div class="inlineContainer own">
			<img class="inlineIcon" src="/img/1705681.png">
			<div class="ownBubble own">
			 <?= $message->msg ?>
			</div>
		</div><span class="own"></span>`
	</div>
    <div class="bubbleWrapper">
		<div class="inlineContainer">
			<img class="inlineIcon" src="/img/marvin.jpg">
			<div class="otherBubble other">
			 <?= $message->response ?>
			</div>
		</div><span class="other"></span>
	</div>
    <?php endforeach; ?>
</div>


<style>
    * {
  font-family: 'Avenir';
  background-color: lightgrey;
}

.quite {
    position: absolute;
    top: 5%;
    left: 5%;
    width: 50px;
    height: 50px;
    border-radius: 25px;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    background-color: red;
}

.container {
    margin-top: 3%;
    margin-bottom: 5%;
    margin-right: 15%;
    border: 2;
    margin-left: 15%;
    border-radius: 20px;
    width: 100%;
}

.bubbleWrapper {
	padding: 10px 10px;
	display: flex;
	justify-content: flex-end;
	flex-direction: column;
	align-self: flex-end;
  color: #fff;
}
.inlineContainer {
  display: inline-flex;
}
.inlineContainer.own {
  flex-direction: row-reverse;
}
.inlineIcon {
  width:20px;
  object-fit: contain;
}
.ownBubble {
	min-width: 60px;
	max-width: 700px;
	padding: 14px 18px;
    margin: 6px 8px;
	background-color: #C5C5C5;
	border-radius: 16px 16px 0 16px;
	border: 1px solid #443f56;
}
.otherBubble {
	min-width: 60px;
	max-width: 700px;
	padding: 14px 18px;
    margin: 6px 8px;
	background-color: #003769;
	border-radius: 16px 16px 16px 0;
	border: 1px solid #54788e;
}
.own {
	align-self: flex-end;
}
.other {
	align-self: flex-start;
}
span.own,
span.other{
  font-size: 14px;
  color: grey;
}
</style>