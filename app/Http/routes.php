<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', function () {
	
	$feed = array();
	$posts = \App\Post::orderBy('id','desc')->get();
	
	foreach( $posts as $key => $post ){
		$user = \App\User::find( $post->userid );
		$items = explode(',', $post->items );
		
		$item1 = \App\Item::find( $items[0] );
		$item2 = \App\Item::find( $items[1] );
		
		$total = $item1->votes + $item2->votes;
		
		$fadeOut1 = $fadeOut2 = '';
		
		if( $item1->votes > $item2->votes ){
			$progress1 = 'success';
			$progress2 = 'danger';
		}
		else if( $item1->votes < $item2->votes ){
			$progress1 = 'danger';
			$progress2 = 'success';
		}
		else {
			$progress1 = 'default';
			$progress2 = 'default';
		}
		
		$feed[$key] = array(
			'title' 	=> $post->title,
			'postedOn'	=> $post->postedOn,
			'user' 		=> array(
				'fbid'	=> $user->fbid,
				'name'	=> $user->name
			),
			'items' => array(
				array(
					'title' 	=> $item1->title,
					'url'		=> $item1->hash,
					'percent' 	=> $item1->votes == 0 ? 0 : $item1->votes / $total * 100,
					'votes'		=> $item1->votes,
					'progress' 	=> $progress1
				),
				array(
					'title' 	=> $item2->title,
					'url'		=> $item2->hash,
					'percent' 	=> $item2->votes == 0 ? 0 : $item2->votes / $total * 100,
					'votes'		=> $item2->votes,
					'progress'	=> $progress2
				)
			)
		);
		
	}
	
	return Response::json( $feed );
	
});
