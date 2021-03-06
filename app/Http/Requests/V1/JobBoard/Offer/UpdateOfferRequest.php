<?php

namespace App\Http\Requests\V1\JobBoard\Offer;

use App\Http\Requests\V1\JobBoard\JobBoardFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOfferRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        $rules = [
            'offer.contact_name' => [
                'required',
                'min:4',
                'max:1000',
            ],
            'offer.contact_email' => [
                'required',
                'min:10',
                'max:1000',
            ],
            'offer.started_at' => [
                'required',
                'date',
            ],
            'offer.activities' => [
                'required',
                'array',
            ],
            'offer.requirements' => [
                'required',
                'array',
            ],
            'offer.location.id' => [
                'required',
                'integer',
            ],
            'offer.contract_type.id' => [
                'required',
                'integer',
            ],
            'offer.position.id' => [
                'required',
                'integer',
            ],
            'offer.sector.id' => [
                'required',
                'integer',
            ],
            'offer.working_day.id' => [
                'required',
                'integer',
            ],
            'offer.experience_time.id' => [
                'required',
                'integer',
            ],
            'offer.training_hours.id' => [
                'required',
                'integer',
            ],
            'offer.status.id' => [
                'required',
                'integer',
            ],
        ];
        return JobBoardFormRequest::rules($rules);
    }

    public function attributes()
    {
        $attributes = [
            'offer.contact_name' => 'nombre-contacto',
            'offer.contact_email' => 'email-contacto',
            'offer.started_at' => 'fecha-inicio',
            'offer.activities' => 'actividades',
            'offer.requirements' => 'requerimientos',
            'offer.location.id' => 'locacion-id',
            'offer.contract_type.id' => 'tipo-contrato-id',
            'offer.position.id' => 'posicion-id',
            'offer.sector.id' => 'sector-id',
            'offer.working_day.id' => 'dia-trabajo-id',
            'offer.experience_time.id' => 'tiempo-expreriencia-id',
            'offer.training_hours.id' => 'horas-entrenamiento-id',
            'offer.status.id' => 'estado-id',
        ];
        return JobBoardFormRequest::attributes($attributes);
    }
}
