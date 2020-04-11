<?php

function setActive($dato){

	return request()->routeIs($dato) ? 'active' : '';

}