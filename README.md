```shell
gcs % ./artisan route:list

  GET|HEAD   / ............................................................................................................................................................................................ 
  POST       _ignition/execute-solution ..................................................................................... ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController
  GET|HEAD   _ignition/health-check ................................................................................................. ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
  POST       _ignition/update-config .............................................................................................. ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
  GET|HEAD   api/v1/categories ........................................................................................................................ api.categories.index › Api\CategoryController@index
  GET|HEAD   api/v1/categories/{category} ................................................................................................................. api.category.show › Api\CategoryController@show
  GET|HEAD   api/v1/categories/{category}/products ................................................................................................ api.category.products › Api\CategoryController@products
  GET|HEAD   api/v1/companies ........................................................................................................................... api.companies.index › Api\CompanyController@index
  GET|HEAD   api/v1/companies/{company} ..................................................................................................................... api.company.show › Api\CompanyController@show
  GET|HEAD   api/v1/companies/{company}/products .................................................................................................... api.company.products › Api\CompanyController@products
  GET|HEAD   api/v1/products ............................................................................................................................. api.products.index › Api\ProductController@index
  GET|HEAD   api/v1/products/{product} ...................................................................................................................... api.product.show › Api\ProductController@show
  GET|HEAD   up ........................................................................................................................................................................................... 
```
