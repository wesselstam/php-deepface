<?php

namespace Astrotomic\DeepFace\Data;

class ExtractFaceResult
{
    public function __construct(
        public readonly FacialArea $facial_area,
        public readonly float $confidence,
    ) {
    }
}