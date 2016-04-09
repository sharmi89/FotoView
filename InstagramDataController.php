<?php

require 'config.php';


/**
* Handle the Instagram data
*/
class InstagramDataController
{
	/**
	 * Get the data from the instagram api
	 * @param boolean $userID [description]
	 */
	public function GetData($userID = false)
	{
		$json = file_get_contents(INSTAGRAM_JSON_URL());
		$insData = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
		return $insData;
	}

	/**
	 * Add new comment for a post
	 * @param [type] $post    [description]
	 * @param [type] $comment [description]
	 * @param [type] $userID  [description]
	 */
	public function addComment($postID, $comment, $userID)
	{
		# code...
	}

	/**
	 * delete a comment from a post
	 * @param  [type] $postID    [description]
	 * @param  [type] $commentID [description]
	 * @param  [type] $userID    [description]
	 * @return [type]            [description]
	 */
	public function deleteComment($postID, $commentID, $userID)
	{
		# code...
	}
}

?>