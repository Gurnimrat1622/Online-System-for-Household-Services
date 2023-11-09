<?php

namespace App\Livewire\Sprovider;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\ServiceCategory;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class EditSproviderProfileComponent extends Component
{
    use WithFileUploads;
    public $service_provider_id;
    public $image;
    public $city;
    public $service_category_id;
    public $newimage;

    public function mount()
    {
        $sprovider = ServiceProvider::where('user_id',Auth::user()->id)->first();
        $this->service_provide_id = $sprovider->id;
        $this->image = $sprovider->image;
        $this->city = $sprovider->city;
        $this->service_category_id = $sprovider->service_category_id;
    }

    public function updateProfile()
    {
        $sprovider = ServiceProvider::where('user_id',Auth::user()->id)->first();
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('sproviders',$imageName);
            $sprovider->image = $imageName;
        }

        $sprovider -> city = $this->city;
        $sprovider -> service_category_id = $this->service_category_id;
        $sprovider -> save();
        session()->flash('message','Profile has been updated successfully!');
    }

    public function render()
    {
        $scategories = ServiceCategory::all();
        
        return view('livewire.sprovider.edit-sprovider-profile-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}
