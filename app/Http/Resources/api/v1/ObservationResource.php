<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ObservationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'code' => $this->id,
            'message' => $this->message,
            'owner'=>$this->user_id,
            'computer'=>$this->computer_id,
            'creation_date'=>$this->updated_at
        ];
    }
}
