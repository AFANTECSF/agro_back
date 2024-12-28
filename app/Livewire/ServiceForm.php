<?php

namespace App\Livewire;

use App\Http\Requests\ServiceRequest;
use Livewire\Component;
use App\Models\Service;
use App\Models\Merchant;
use App\Types\MerchantType;

class ServiceForm extends Component
{
    public $service;
    public $serviceId;
    public $name;
    public $description;
    public $merchant_id;
    public $price_per_hectare;
    public bool $isModal = false;
    public $merchants;
    public $isEditing = false;

    protected function rules()
    {
        return (new ServiceRequest())->rules();
    }
    
    public function mount($serviceId = null)
    {
        $this->merchants = Merchant::where('merchant_type', MerchantType::CLIENT)
            ->pluck('business_name', 'id');

        if ($serviceId) {
            $this->isEditing = true;
            $this->serviceId = $serviceId;
            $this->service = Service::find($serviceId);
            $this->name = $this->service->name;
            $this->description = $this->service->description;
            $this->merchant_id = $this->service->merchant_id;
            $this->price_per_hectare = $this->service->price_per_hectare;
        }
    }

    public function save()
    {
        $validatedData = $this->validate();

        try {
            if ($this->isEditing) {
                $this->service->update($validatedData);
                $message = 'Service updated successfully';
            } else {
                Service::create($validatedData);
                $message = 'Service created successfully';
            }

            $this->dispatch('swal', [
                'title' => 'Success',
                'message' => $message,
                'icon' => 'success',
                'redirect' => route('services.index')
            ]);

            if ($this->isModal) {
                $this->dispatch('close-modal');
            }

        } catch (\Exception $e) {
            $this->dispatch('swal', [
                'title' => ('Error'),
                'message' => ('Ocurrió un error al procesar la solicitud'),
                'icon' => 'error',
            ]);
        }

        // return redirect()->route('services.index');
    }

    public function render()
    {
        return view('livewire.service-form');
    }
}