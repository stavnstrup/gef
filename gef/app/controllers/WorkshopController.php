<?php


class WorkshopController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Workshop::get());
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$workshop = Workshop::find($Id);
		if $workshop->freeplaces > 0 {
		   $workshop->freeplaces = $workshop->freeplaces - 1;
                   $workshop->save();
                   return Responce::eloquent($todo);
                } else {
		   return Response::json('Workshop overtegnet', 404);
                }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Workshop::destroy($id
	}


}
