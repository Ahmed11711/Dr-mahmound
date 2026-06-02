/**
 * Auto-generated fields for Chapter
 * Generated at: 2026-05-09 13:48:17
 */
export const ChapterFields = [
  { 
    key: "id", 
    label: "Id", 
    type: "text", 
    cell_type: "text",
    display_field: null,
    required: 1, 
    placeholder: "Enter Id",
    searchable: false,
    filterable: false,
    sortable: true,
    table_show: false,
    form_show: true,
    options: null
  },
  { 
    key: "course_id", 
    label: "Course Id", 
    type: "select", 
    cell_type: "relation",
    display_field: "course.name",
    required: 1, 
    placeholder: "Enter Course Id",
    searchable: false,
    filterable: false,
    sortable: true,
    table_show: false,
    form_show: true,
    endpoint: 'courses',
    relation_fields: 'id,name',
    options: { label: 'name', value: 'id' }
  },
  { 
    key: "name", 
    label: "Name", 
    type: "text", 
    cell_type: "text",
    display_field: null,
    required: 1, 
    placeholder: "Enter Name",
    searchable: false,
    filterable: false,
    sortable: true,
    table_show: true,
    form_show: true,
    options: null
  },
  { 
    key: "order", 
    label: "Order", 
    type: "text", 
    cell_type: "text",
    display_field: null,
    required: 1, 
    placeholder: "Enter Order",
    searchable: false,
    filterable: false,
    sortable: true,
    table_show: true,
    form_show: true,
    options: null
  },
  { 
    key: "created_at", 
    label: "Created At", 
    type: "date", 
    cell_type: "date",
    display_field: null,
    required: 0, 
    placeholder: "Enter Created At",
    searchable: false,
    filterable: false,
    sortable: true,
    table_show: true,
    form_show: false,
    options: null
  },
  { 
    key: "updated_at", 
    label: "Updated At", 
    type: "date", 
    cell_type: "date",
    display_field: null,
    required: 0, 
    placeholder: "Enter Updated At",
    searchable: false,
    filterable: false,
    sortable: true,
    table_show: false,
    form_show: false,
    options: null
  }
];