<?php

namespace App\Tenant;

class Manager
{
    protected $tenant;

    /**
     * Set the tenant
     * @param \App\Company $tenant
     * @return void
     */
    public function setTenant($tenant)
    {
        $this->tenant = $tenant;
    }

    /**
     * Get the tenant
     * @return \App\Company
     */
    public function getTenant()
    {
        return $this->tenant;
    }
}
