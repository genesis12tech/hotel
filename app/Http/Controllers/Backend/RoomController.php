<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Room;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RoomController extends Controller {
	public function EditRoom($id) {
		$basic_facility = Facility::where('rooms_id', $id)->get();
		$editData = Room::find($id);
		return view('backend.allroom.rooms.edit_rooms', compact('editData', 'basic_facility'));
	} //End Method

	public function UpdateRoom(Request $request, $id) {

		$room = Room::find($id);
		$room->roomtype_id = $room->roomtype_id;
		$room->total_adult = $request->total_adult;
		$room->total_child = $request->total_child;
		$room->room_capacity = $request->room_capacity;
		$room->price = $request->price;

		$room->size = $request->size;
		$room->view = $request->view;
		$room->bed_style = $request->bed_style;
		$room->discount = $request->discount;
		$room->short_desc = $request->short_desc;
		$room->description = $request->description;
		/// Update Single Image

		if ($request->file('image')) {

			$image = $request->file('image');
			$name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
			Image::make($image)->resize(550, 850)->save('upload/roomimg/' . $name_gen);
			$room['image'] = $name_gen;
		}

		$room->save();

		//// Update for Facility Table

		if ($request->facility_name == NULL) {

			$notification = array(
				'message' => 'Sorry! Not Any Basic Facility Select',
				'alert-type' => 'error',
			);

			return redirect()->back()->with($notification);

		} else {
			Facility::where('rooms_id', $id)->delete();
			$facilities = Count($request->facility_name);
			for ($i = 0; $i < $facilities; $i++) {
				$fcount = new Facility();
				$fcount->rooms_id = $room->id;
				$fcount->facility_name = $request->facility_name[$i];
				$fcount->save();

			} // end for

		} // end else

	} //End Method

}
