<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'company_name',
        'email',
        'service_type',
        'project_budget',
        'project_details',
        'status'
    ];

    protected $casts = [
        'project_budget' => 'decimal:2',
    ];

    public static function getServiceTypes()
    {
        return [
            [
                'label' => 'Web Development',
                'value' => 'web_development'
            ],
            [
                'label' => 'E-commerce Development',
                'value' => 'ecommerce_development'
            ],
            [
                'label' => 'Mobile App Development',
                'value' => 'mobile_app_development'
            ],
            [
                'label' => 'UI/UX Design',
                'value' => 'ui_ux_design'
            ],
            [
                'label' => 'Web Design',
                'value' => 'web_design'
            ],
            [
                'label' => 'SEO Services',
                'value' => 'seo_services'
            ],
            [
                'label' => 'Digital Marketing',
                'value' => 'digital_marketing'
            ],
            [
                'label' => 'WordPress Development',
                'value' => 'wordpress_development'
            ],
            [
                'label' => 'Software Development',
                'value' => 'software_development'
            ],
            [
                'label' => 'API Development',
                'value' => 'api_development'
            ],
            [
                'label' => 'Technical Consultation',
                'value' => 'technical_consultation'
            ],
            [
                'label' => 'Website Maintenance',
                'value' => 'website_maintenance'
            ],
            [
                'label' => 'Cloud Services',
                'value' => 'cloud_services'
            ],
            [
                'label' => 'Database Design',
                'value' => 'database_design'
            ],
            [
                'label' => 'System Integration',
                'value' => 'system_integration'
            ],
            [
                'label' => 'Performance Optimization',
                'value' => 'performance_optimization'
            ],
            [
                'label' => 'Security Audit',
                'value' => 'security_audit'
            ],
            [
                'label' => 'Other',
                'value' => 'other'
            ]
        ];
    }
}
