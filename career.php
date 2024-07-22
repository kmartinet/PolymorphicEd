<?php
// career.php

// Array of career information
$careers = [
    'bacteriologist' => [
        'title' => 'Bacteriologist',
        'description' => 'Bacteriologists focus on the study of bacteria and bacterial infections, contributing to the development of antibiotics and other treatments.',
        'responsibilities' => [
            'Conducting research on bacterial pathogens.',
            'Developing and testing antibiotics and other treatments.',
            'Analyzing bacterial samples and interpreting data.',
            'Collaborating with healthcare professionals and researchers.',
            'Publishing research findings in scientific journals.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in microbiology, biology, or a related field (minimum).',
            'Master\'s degree or Ph.D. in microbiology or a related field (often required for research positions, managing labs, and policy development).'           
        ],
        'pathways' => [
            'Bacteriologist',
            'Research Scientist',
            'Principal Investigator (Research Group Leader)',
            'Laboratory Director'
        ],
        'orgs' => [
            'National Institute for Biological Standards and Control: NIBSC Bacteriology' => 'https://nibsc.org/science_and_research/bacteriology.aspx',
            'University of Nebraska Medical Center: Department of Pathology, Microbiology And Immunology Research' => 'https://www.unmc.edu/pathology-research/microbiology/bacteriology/index.html',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
            'Johns Hopkins University: Johns Hopkins Careers' => 'https://jobs.jhu.edu/',
            'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
        ],
        'image' => 'img/careers/Bacteria_collage.JPG',
        'imgSource' => [
          'link' => 'https://en.wikipedia.org/wiki/Bacteriologist#/media/File:Bacteria_collage.jpg',
          'text' => 'Wikipedia'
      ]
    ],
    'biomedical_researcher' => [
            'title' => 'Biomedical Researcher',
            'description' => 'Biomedical researchers conduct scientific research to advance knowledge in the field of biology and medicine. They work on developing new drugs, therapies, and medical technologies to improve human health.',
            'responsibilities' => [
                'Designing and conducting experiments to test hypotheses related to biological processes and disease mechanisms.',
                'Analyzing data and interpreting results.',
                'Publishing research findings in scientific journals.',
                'Collaborating with other scientists and researchers.',
                'Applying for grants and funding to support research projects.'
            ],
            'qualifications' => [
                'Bachelor\'s degree in biology, chemistry, or a related field (minimum).',
                'Master\'s degree or Ph.D. in a specialized area of biomedical science (often required for research positions, managing labs, and policy development).'
            ],
            'pathways' => [
                'Research Scientist',
                'Faculty Position in Academia',
                'Director of Research'
            ],
            'orgs' => [
                'Biomedical Research Foundation: Biomedical Research Foundation' => 'https://www.biomedicalresearchfoundation.org/',
                'Biomedical Research Institute: Biomedical Research Institute' => 'https://www.afbr-bri.org',
                'Johns Hopkins University: Johns Hopkins Careers' => 'https://jobs.jhu.edu/',
                'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
            ],
            'image' => 'img/careers/biomedical_researcher.png',
            'imgSource' => [
              'link' => 'https://www.nationalgeographic.com/science/article/magnifection-mass-producing-drugs-in-record-time',
              'text' => 'National Geographic'
          ]
        ],
        'biosecurity_specialist' => [
            'title' => 'Biosecurity Specialist',
            'description' => 'Biosecurity specialists develop and implement measures to protect against biological threats and infectious disease outbreaks, ensuring public safety and preparedness.',
            'responsibilities' => [
                'Developing biosecurity protocols and policies.',
                'Conducting risk assessments for biological threats.',
                'Implementing biosecurity measures in laboratories and facilities.',
                'Collaborating with public health officials and security agencies.'
            ],
            'qualifications' => [
                'Bachelor\'s degree in microbiology, public health, or a related field (minimum).',
                'Certification in biosecurity or related field (optional but preferred).'
            ],
            'pathways' => [
                'Biosecurity Specialist',
                'Director of Biosecurity',
                'Public Health Preparedness Manager',
                'Biosecurity Consultant'
            ],
            'orgs' => [
                'The Association for Biosafety and Biosecurity: ABSA International Biosafety' => 'https://absa.org/biosafety/',
                'International Federation of Biosafety Associations: IFBA Biosecurity & Biological Nonproliferation' => 'https://internationalbiosafety.org/who-we-are/what-we-do/biosecurity-biological-nonproliferation/',
                'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
                'Department of Homeland Security (DHS): DHS Careers' => 'https://www.dhs.gov/homeland-security-careers',
                'Johns Hopkins University: Johns Hopkins Careers' => 'https://jobs.jhu.edu/'
            ],
            'image' => 'img/careers/biosecurity.png',
            'imgSource' => [
              'link' => 'https://en.wikipedia.org/wiki/Biological_hazard#/media/File:Biohazard_symbol.svg',
              'text' => 'Wikipedia'
          ]
        ],
        'clinical_trials_manager' => [
            'title' => 'Clinical Trials Manager',
            'description' => 'Clinical trials managers oversee clinical trials, ensuring compliance with regulatory standards and the collection of high-quality data.',
            'responsibilities' => [
                'Planning and coordinating clinical trials.',
                'Ensuring compliance with regulatory requirements.',
                'Managing trial budgets and timelines.',
                'Communicating with stakeholders and trial participants.'
            ],
            'qualifications' => [
                'Bachelor\'s degree in life sciences, nursing, or a related field (minimum).',
                'Certification in clinical research (e.g., Certified Clinical Research Professional, CCRP) (often preferred).'
            ],
            'pathways' => [
                'Clinical Trials Manager',
                'Clinical Research Coordinator',
                'Director of Clinical Research'
            ],
            'orgs' => [
                'Association of Clinical Research Professionals: ACRP Careers' => 'https://acrpnet.org/career-center/',
                'The Center for Information and Study on Clinical Research Participation: CISCRP' => 'https://www.ciscrp.org/',
                'The Institute of Clinical Research: ICR Starting a Career in Clinical Research' => 'https://icr-global.org/starting-a-career-in-clinical-research/',
                'Johns Hopkins University: Johns Hopkins Careers' => 'https://jobs.jhu.edu/'
            ],
            'image' => 'img/careers/clinical_trials_manager.png'
        ],
        'cytotechnologist' => [
            'title' => 'Cytotechnologist',
            'description' => 'Cytotechnologists specialize in the study of cells, examining them under a microscope to detect abnormalities that may indicate diseases such as cancer. They play a crucial role in the early detection and diagnosis of many diseases.',
            'responsibilities' => [
                'Preparing and examining slides of cells and tissues.',
                'Identifying cellular abnormalities and diagnosing diseases.',
                'Collaborating with pathologists and other healthcare professionals.',
                'Maintaining accurate records and documentation.',
                'Ensuring quality control and adherence to laboratory standards.'
            ],
            'qualifications' => [
                'Bachelor\'s degree in cytotechnology or a related field.',
                'Certification from a recognized certifying body (e.g., ASCP).'
            ],
            'pathways' => [
                'Cytotechnologist',
                'Pathologist Assistant (a pathologist studies fluids, tissues, or organs taken from the body)',
                'Laboratory Director'
            ],
            'orgs' => [
                'American Society for Cytotechnology: ASCT' => 'https://www.asct.com/ASCTWeb/Content/About_ASCT.aspx#:~:text=The%20American%20Society%20for%20Cytotechnology,technologies%20affecting%20the%20profession%3B%20and',
                'American Society of Cytopathology Foundation: ASC Foundation' => 'https://cytopathology.org/mpage/FoundationAbout',
                'The International Academy of Cytotechnology: IAC' => 'https://www.cytology-iac.org/membership-and-the-iac/about-the-iac/'
            ],
            'image' => 'img/careers/cytotechnologist.png'
        ],
        'emergency_response_coordinator' => [
            'title' => 'Emergency Response Coordinator',
            'description' => 'Emergency response coordinators manage public health responses to infectious disease outbreaks and other emergencies. They develop plans, coordinate resources, and provide leadership during public health crises.',
            'responsibilities' => [
                'Developing and implementing emergency response plans.',
                'Coordinating resources and personnel during emergencies.',
                'Communicating with public health officials and the public.',
                'Conducting training and exercises for emergency preparedness.',
                'Evaluating and improving response strategies.'
            ],
            'qualifications' => [
                'Bachelor\'s degree in public health, emergency management, or a related field (minimum).',
                'Master\'s degree in public health or emergency management (often preferred).'
            ],
            'pathways' => [
                'Emergency Response Coordinator',
                'Director of Emergency Management',
                'Public Health Emergency Preparedness Manager',
                'Disaster Response Specialist'
            ],
            'orgs' => [
                'Red Cross: Disaster Services' => 'https://www.redcross.org/about-us/careers/pbjob-types/disaster-services.html',
                'U.S. Department of the Interior: Emergency Management' => 'https://careers.doi.gov/occupational-series/emergency-management',
                'International Association of Emergency Managers: IAEM' => 'https://www.iaem.org/About',
                'National Emergency Management Association: NEMA' => 'https://nemaweb.org/about/',
                'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
                'Federal Emergency Management Agency (FEMA): FEMA Careers' => 'https://www.fema.gov/careers',
                'American Red Cross: Red Cross Careers' => 'https://www.redcross.org/about-us/careers.html'
            ],
            'image' => 'img/careers/emergency_response_coordinator.png'
        ],
        'AI_ML' => [
          'title' => 'AI and Machine Learning Specialist',
          'description' => 'An AI and machine learning specialist designs, develops, and implements algorithms and models to enable machines to "learn" from data, improving decision-making and automating complex tasks across various industries.',
          'responsibilities' => [
              'Developing and implementing AI and machine learning models.',
              'Analyzing data to predict disease spread and outcomes.',
              'Publishing research findings in scientific journals.'
          ],
          'qualifications' => [
              'Bachelor\'s degree in computer science, data science, or a related field (minimum).',
              'Master\'s degree or Ph.D. in AI, machine learning, or a related field (often preferred).'
          ],
          'pathways' => [
              'AI and Machine Learning Specialist',
              'Data Scientist',
              'Public Health Data Analyst'
          ],
          'orgs' => [
              'Association for the Advancement of Artificial Intelligence: AAAI' => 'https://aaai.org/about-aaai/',
              'Artificial Intelligence Board of America: ARTiBA' => 'https://www.artiba.org/about-artiba',
              'International Society for Technology in Education: ISTE Artificial Intelligence in Education' => 'https://iste.org/ai',
              'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/'
          ],
          'image' => 'img/careers/MachineLearning.png',
          'imgSource' => [
            'link' => 'https://commons.wikimedia.org/wiki/File:Artificial_neural_network_In-Out.svg',
            'text' => 'Wikipedia'
          ]
      ],
      'bioinformatics_developer' => [
        'title' => 'Bioinformatics Developer',
        'description' => 'A bioinformatics developer creates and maintains software tools and databases to analyze biological data, aiding researchers in interpreting complex genomic and proteomic information.',
        'responsibilities' => [
            'Designing and developing bioinformatics software.',
            'Collaborating with researchers to interpret data.',
            'Ensuring software usability and performance.',
            'Publishing research findings in scientific journals.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in bioinformatics, computer science, or a related field (minimum).',
            'Master\'s degree or Ph.D. in bioinformatics or a related field (often preferred).'
        ],
        'pathways' => [
            'Bioinformatics Developer',
            'Bioinformatics Specialist',
            'Computational Biologist'
        ],
        'orgs' => [
            'Open Bioinformatics Foundation: OBF' => 'https://www.open-bio.org/about/',
            'National Institute of Health: NIH Bioinformatics Scientific Interest Group' => 'https://oir.nih.gov/sigs/bioinformatics-scientific-interest-group',
            'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
        ],
        'image' => 'img/careers/bioinformatics_developer.png',
        'imgSource' => [
          'link' => 'https://cran.r-project.org/web/packages/geiger/geiger.pdf',
          'text' => 'Geiger R Package'
        ]
    ],
    'bioinformatics_specialist' => [
      'title' => 'Bioinformatics Specialist',
      'description' => 'A bioinformatics specialist uses computational tools to analyze and interpret biological data, collaborating with researchers to advance understanding in areas like genomics and proteomics.',
      'responsibilities' => [
          'Analyzing genomic and proteomic data.',
          'Utilizing bioinformatics software and tools to interpret data.',
          'Conducting research on infectious disease mechanisms.',
          'Publishing research findings in scientific journals.'
      ],
      'qualifications' => [
          'Bachelor\'s degree in bioinformatics, computer science, or a related field (minimum).',
          'Master\'s degree or Ph.D. in bioinformatics or a related field (often preferred).'
      ],
      'pathways' => [
          'Bioinformatics Specialist',
          'Bioinformatics Researcher',
          'Computational Biologist'
      ],
      'orgs' => [
          'International Society for Computational Biology: ISCB' => 'https://www.iscb.org/who-we-are',
          'Swiss Institute of Bioinformatics: SIB' => 'https://www.sib.swiss/about/who-we-are',
          'Institute of Bioinformatics: IOB' => 'https://www.ibioinformatics.org/about_us.php',
          'Agency for Science, Technology and Research: A*STAR Bioinformatics Institute' => 'https://www.a-star.edu.sg/bii',
          'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov'
      ],
      'image' => 'img/careers/bioinformatics_specialist.png',
      'imgSource' => [
        'link' => 'https://en.wikipedia.org/wiki/Bioinformatics#/media/File:Muscle_alignment_view.png',
        'text' => 'Wikipedia'
      ]
  ],
  'health_information_technologist' => [
    'title' => 'Health Information Technologist',
    'description' => 'A health information technologist manages and secures patient health data, ensuring its accuracy and accessibility, and uses technology to improve healthcare outcomes.',
    'responsibilities' => [
        'Managing patient health information and medical records.',
        'Using classification software to assign clinical codes for insurance reimbursement.',
        'Ensuring data accuracy, security, and accessibility.',
        'Collaborating with IT professionals to maintain health information systems.'
    ],
    'qualifications' => [
        'Associate\'s or bachelor\'s degree in health information management or a related field.',
        'Certification as a Registered Health Information Technician (RHIT) or Registered Health Information Administrator (RHIA).'
    ],
    'pathways' => [
        'Health Information Technician',
        'Director of Health Information Services',
        'Health Informatics Specialist'
    ],
    'orgs' => [
        'American Health Information Management Association: AHIMA' => 'https://www.ahima.org/who-we-are/about-us/',
        'American Medical Informatics Association: AMIA' => 'https://www.amia.org/about-amia',
        'American Nursing Informatics Association: ANIA' => 'https://www.ania.org/about-us',
        'Healthcare Information and Management Systems Society: HIMSS' => 'https://www.himss.org/who-we-are'
    ],
    'image' => 'img/careers/health_info_tech.png'
  ],
  'bioengineer' => [
    'title' => 'Bioengineer',
    'description' => 'A bioengineer designs and develops medical devices and technologies to diagnose, monitor, and treat health conditions, applying principles of biology and engineering.',
    'responsibilities' => [
        'Designing and testing medical devices and technologies.',
        'Conducting research on biomedical engineering solutions.',
        'Collaborating with healthcare professionals and researchers.',
        'Ensuring compliance with regulatory standards.',
        'Publishing research findings in scientific journals.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in bioengineering, biomedical engineering, or a related field (minimum).',
        'Master\'s degree or Ph.D. in bioengineering or a related field (often preferred).'
    ],
    'pathways' => [
        'Bioengineer',
        'Biomedical Engineer',
        'Research Scientist',
        'Medical Device Engineer'
    ],
    'orgs' => [
        'Biomedical Engineering Society: BMES' => 'https://www.bmes.org/about-us',
        'Society for Biological Engineering: SBE' => 'https://www.aiche.org/sbe',
        'American Institute for Medical and Biological Engineering: AIMBE' => 'https://aimbe.org/about-aimbe/',
        'Johns Hopkins University: Johns Hopkins Careers' => 'https://jobs.jhu.edu/',
        'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
    ],
    'image' => 'img/careers/bioengineer.png',
    'imgSource' => [
      'link' => 'https://www.pacific.edu/engineering/academics/bioengineering',
      'text' => 'University of the Pacific'
    ]
  ],
  'chemical_engineer' => [
    'title' => 'Chemical Engineer',
    'description' => 'A chemical engineer designs and optimizes processes for producing chemicals, fuels, pharmaceuticals, and other products, ensuring efficiency, safety, and environmental compliance.',
    'responsibilities' => [
        'Designing and optimizing chemical processes during manufacturing processes.',
        'Conducting research on pharmaceutical formulations.',
        'Collaborating with other scientists.',
        'Ensuring compliance with regulatory standards.',
        'Publishing research findings in scientific journals.'
    ],
    'qualifications' => [
        'Bachelor’s degree in chemical engineering, chemistry, or a related field (minimum).',
        'Master’s degree or Ph.D. in chemical engineering or a related field (often preferred).'
    ],
    'pathways' => [
        'Chemical Engineer',
        'Process Engineer',
        'Research Scientist'
    ],
    'orgs' => [
        'Institution of Chemical Engineers: IChemE' => 'https://www.icheme.org/about-us/',
        'Canadian Society for Chemical Engineering: CIC CSChE' => 'https://www.cheminst.ca/about/',
        'American Institute of Chemical Engineers: AIChE' => 'https://www.aiche.org/'
    ],
    'image' => 'img/careers/chemical_engineer.png',
    'imgSource' => [
      'link' => 'https://www.aiche.org/chenected/2022/08/career-options-ches-process-and-design-engineering',
      'text' => 'AIChE'
    ]
  ],
  'environmental_engineer' => [
        'title' => 'Environmental Engineer',
        'description' => 'An environmental engineer develops solutions to environmental problems, focusing on areas like pollution control, waste management, and sustainable design to protect and improve the environment.',
        'responsibilities' => [
            'Designing and implementing systems to reduce air, water, and soil pollution.',
            'Developing methods for waste treatment and disposal, including recycling and hazardous waste management.',
            'Conducting assessments to evaluate the environmental impact of construction projects and industrial activities.',
            'Ensuring compliance with environmental laws and regulations, and preparing necessary documentation for permits.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in environmental engineering, civil engineering, or a related field (minimum).',
            'Master\'s degree in environmental engineering (often preferred).'
        ],
        'pathways' => [
            'Environmental Health Engineer',
            'Environmental Engineer',
            'Director of Environmental Health',
            'Environmental Health Consultant'
        ],
        'orgs' => [
            'American Academy of Environmental Engineers & Scientists: AAEES' => 'https://www.aaees.org/aboutaaees',
            'Environmental Engineering and Science Foundation: EESF' => 'https://www.eesfoundation.org/abouteesf/',
            'Association of Environmental Engineering and Science Professors: AEESP' => 'https://aeesp.org/about',
            'EnvironmentalScience.org: Health Safety Engineer' => 'https://www.environmentalscience.org/career/health-safety-engineer',
            'Environmental Protection Agency (EPA): EPA Careers' => 'https://www.epa.gov/careers',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
            'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
            'Pan American Health Organization (PAHO): PAHO Careers' => 'https://www.paho.org/en/careers-paho'
        ],
        'image' => 'img/careers/environmental_engineer.png',
        'imgSource' => [
          'link' => 'https://www.blueridge.edu/programs-courses/engineering/environmental-engineering-technology/',
          'text' => 'Blue Ridge Community College'
        ]
    ],
    'public_health_engineer' => [
      'title' => 'Public Health Engineer',
      'description' => 'A public health engineer designs and implements infrastructure projects, such as clean water systems and waste management, to prevent disease and promote community health.',
      'responsibilities' => [
          'Designing safe water and sanitation systems.',
          'Developing waste management solutions.',
          'Conducting risk assessments of public health infrastructure.',
          'Collaborating with public health officials and urban planners.',
          'Educating communities on public health engineering solutions.'
      ],
      'qualifications' => [
          'Bachelor\'s degree in civil engineering, environmental engineering, or a related field (minimum).',
          'Master\'s degree in public health or environmental engineering (often preferred).'
      ],
      'pathways' => [
          'Public Health Engineer',
          'Environmental Health Engineer',
          'Director of Public Health Engineering',
          'Public Health Consultant'
      ],
      'orgs' => [
          'Society of Public Health Engineers: SoPHE' => 'https://www.cibse.org/get-involved/societies/society-of-public-health-engineers-sophe',
          'Engineer Professional Advisory Committee: Public Health Engineering Practice' => 'https://dcp.psc.gov/OSG/engineer/public-health-engineering-practice-landing-page.aspx',
          'Healthcare Engineering Alliance Society: HEALS' => 'https://www.healthcare-engineering.org/subjects',
          'Environmental Protection Agency (EPA): EPA Careers' => 'https://www.epa.gov/careers',
          'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
          'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
          'Pan American Health Organization (PAHO): PAHO Careers' => 'https://www.paho.org/en/careers-paho'
      ],
      'image' => 'img/careers/pub_health_eng.png',
      'imgSource' => [
        'link' => 'https://www.mathematica.org/news/new-tools-help-public-health-officials-use-wastewater-data-to-identify-disease-outbreaks',
        'text' => 'Mathematica'
      ]
    ],
    'biostatistician' => [
        'title' => 'Biostatistician',
        'description' => 'A biostatistician designs and analyzes clinical trials and research studies, applying statistical methods to interpret data and support evidence-based decision-making in healthcare.',
        'responsibilities' => [
            'Designing and analyzing clinical trials and research studies.',
            'Developing and applying statistical models.',
            'Interpreting and presenting data to researchers and policymakers.',
            'Collaborating with medical researchers and scientists.',
            'Ensuring the accuracy and reliability of data.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in statistics, mathematics, or a related field (minimum).',
            'Master\'s degree or Ph.D. in biostatistics or a related field (often required for research positions, biotechnology industry jobs, and policy development).'
        ],
        'pathways' => [
            'Biostatistician',
            'Director of Biostatistics',
            'Faculty Position in Academia'
        ],
        'orgs' => [
            'National Institute of Allergy and Infectious Diseases: NIH Biostatistics Research Branch' => 'https://www.niaid.nih.gov/about/biostatistics-research-branch',
            'American Statistical Association: ASA' => 'https://www.amstat.org/about-asa',
            'Cancer Research and Biostatistics: CRAB' => 'https://www.crab.org/about-us/',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/'
        ],
        'image' => 'img/careers/biostatistician.png'
    ],
    'health_economist' => [
      'title' => 'Health Economist',
      'description' => 'Health economists analyze the economic impact of infectious diseases and the cost-effectiveness of interventions, providing insights to inform public health decisions.',
      'responsibilities' => [
          'Conducting economic evaluations of healthcare interventions.',
          'Analyzing the cost-effectiveness of infectious disease treatments and prevention strategies.',
          'Developing economic models to predict healthcare costs.',
          'Collaborating with policymakers and healthcare providers.',
          'Publishing research findings in scientific journals.'
      ],
      'qualifications' => [
          'Bachelor\'s degree in economics, public health, or a related field (minimum).',
          'Master\'s degree or Ph.D. in health economics or a related field (often required for health policy analyst positions and academic research).'
      ],
      'pathways' => [
          'Health Economist',
          'Health Policy Analyst',
          'Director of Health Economics',
          'Public Health Consultant'
      ],
      'orgs' => [
          'International Health Economics Association: IHEA' => 'https://healtheconomics.org/about-us/',
          'The Professional Society for Health Economics and Outcomes Outreach: ISPOR' => 'https://www.ispor.org/about/our-society',
          'Institute of Health Economics: IHE' => 'https://www.ihe.ca/about/about-ihe',
          'American Society of Health Economics: ASHEcon' => 'https://www.ashecon.org/about/',
          'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
          'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers'
      ],
      'image' => 'img/careers/health_econ.png'
  ],
  'health_policy_analyst' => [
    'title' => 'Health Policy Analyst',
    'description' => 'Health policy analysts research and analyze policies related to infectious disease prevention and control. They provide recommendations to improve public health policies and programs.',
    'responsibilities' => [
        'Conducting research on public health policies and programs.',
        'Analyzing data related to health outcomes and policy effectiveness.',
        'Developing policy recommendations and reports.',
        'Collaborating with policymakers and stakeholders.',
        'Advocating for evidence-based public health policies.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in public health, health policy, or a related field (minimum).',
        'Master\'s degree in public health or public policy (often preferred).'
    ],
    'pathways' => [
        'Health Policy Analyst',
        'Director of Health Policy',
        'Public Health Consultant'
    ],
    'orgs' => [
        'Association for Public Policy Analysis & Management: APPAM' => 'https://www.appam.org/about-appam/general-info/',
        'WORLD Policy Analysis Center: WORLD' => 'https://www.worldpolicycenter.org/about/about-world',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
        'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
        'American Public Health Association (APHA): APHA Careers' => 'https://apha.org/professional-development/careers-at-apha'
    ],
    'image' => 'img/careers/health_policy_analyst.png',
    'imgSource' => [
      'link' => 'https://www.bestcolleges.com/healthcare/healthcare-policy-analyst-job/',
      'text' => 'BestColleges'
    ]
  ],
  'mathematical_epidemiologist' => [
    'title' => 'Mathematical Epidemiologist',
    'description' => 'Mathematical epidemiologists use mathematical models to predict the spread and control of diseases, providing insights for public health interventions.',
    'responsibilities' => [
        'Developing mathematical models of disease transmission.',
        'Analyzing epidemiological data.',
        'Collaborating with public health officials and researchers.',
        'Publishing research findings in scientific journals.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in mathematics, epidemiology, or a related field (minimum).',
        'Master\'s degree or Ph.D. in mathematical epidemiology or a related field (often preferred).'
    ],
    'pathways' => [
        'Mathematical Epidemiologist',
        'Research Scientist',
        'Public Health Consultant'
    ],
    'orgs' => [
        'Society for Mathematical Biology: SMB' => 'https://smb.org/Mathematical-Epidemiology',
        'The NSF-Simons National Institute for Theory and Mathematics in Biology: NITMB' => 'https://www.nitmb.org/about-3',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
        'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
        'Pan American Health Organization (PAHO): PAHO Careers' => 'https://www.paho.org/en/careers-paho',
        'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
    ],
    'image' => 'img/careers/math_epidemiologist.png',
    'imgSource' => [
      'link' => 'https://www.cam.ac.uk/research/news/new-cambridge-developed-resources-help-students-learn-how-maths-can-help-tackle-infectious-diseases',
      'text' => 'University of Cambridge'
    ]
  ],
  'operations_research_analyst' => [
        'title' => 'Operations Research Analyst',
        'description' => 'Operations research analysts apply mathematical methods to optimize resource allocation in managing infectious disease outbreaks.',
        'responsibilities' => [
            'Analyzing data to improve decision-making.',
            'Developing optimization models for resource allocation.',
            'Collaborating with public health officials and emergency response teams.',
            'Publishing research findings in scientific journals.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in operations research, mathematics, or a related field (minimum).',
            'Master\'s degree or Ph.D. in operations research or a related field (often preferred).'
        ],
        'pathways' => [
            'Operations Research Analyst',
            'Data Scientist',
            'Public Health Consultant'
        ],
        'orgs' => [
            'Analyst Institute: Analyst Institute' => 'https://analystinstitute.org/',
            'The Operational Research Society: The OR Society' => 'https://www.theorsociety.com/about-us/',
            'U.S. Air Force: Air Force Operations Research Analyst' => 'https://www.airforce.com/careers/logistics-and-administration/operations-research-analyst',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
            'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
            'Pan American Health Organization (PAHO): PAHO Careers' => 'https://www.paho.org/en/careers-paho',
            'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
        ],
        'image' => 'img/careers/operations_research_analyst.png',
        'imgSource' => [
          'link' => 'https://quietprofessionalsllc.com/news-events/what-does-an-operations-research-analyst-do/',
          'text' => 'Quiet Professionals'
        ]
    ],
    'quantitative_public_health_researcher' => [
      'title' => 'Quantitative Public Health Researcher',
      'description' => 'Quantitative public health researchers use quantitative methods to assess public health interventions and their impact on infectious diseases.',
      'responsibilities' => [
          'Conducting quantitative research on public health interventions.',
          'Analyzing data to evaluate intervention effectiveness.',
          'Collaborating with public health officials and researchers.',
          'Publishing research findings in scientific journals.'
      ],
      'qualifications' => [
          'Bachelor\'s degree in public health, statistics, or a related field (minimum).',
          'Master\'s degree or Ph.D. in public health or a related field (often preferred).'
      ],
      'pathways' => [
          'Quantitative Public Health Researcher',
          'Data Scientist',
          'Public Health Consultant'
      ],
      'orgs' => [
          'Public Health Institute: PHI Research - Quantitative' => 'https://www.phi.org/our-work/expertise/research-quantitative/',
          'Lerner Research Institute: Quantitative Health' => 'https://www.lerner.ccf.org/quantitative-health/',
          'Mayo Clinic: Mayo Department of Quantitative Health Sciences' => 'https://www.mayo.edu/research/departments-divisions/quantitative-health-sciences/overview',
          'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
          'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
          'Pan American Health Organization (PAHO): PAHO Careers' => 'https://www.paho.org/en/careers-paho',
          'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
      ],
      'image' => 'img/careers/quantitative_public_health_researcher.png',
      'imgSource' => [
        'link' => 'https://hwsph.ucsd.edu/research/index.html',
        'text' => 'UC SanDiego'
      ]
    ],
  'clinical_ethicist' => [
    'title' => 'Clinical Ethicist',
    'description' => 'Clinical ethicists provide guidance on ethical issues in patient care and treatment, advising healthcare teams, developing ethical policies, and conducting consultations with patients and families.',
    'responsibilities' => [
        'Advising healthcare teams on ethical issues.',
        'Developing and implementing ethical guidelines and policies.',
        'Conducting ethics consultations with patients and families.',
        'Educating healthcare professionals on ethical practices.',
        'Conducting research on bioethics and publishing findings.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in bioethics, philosophy, or a related field (minimum).',
        'Master\'s degree or Ph.D. in bioethics or a related field (often preferred).'
    ],
    'pathways' => [
        'Clinical Ethicist',
        'Director of Bioethics',
        'Bioethics Consultant',
        'Academic Researcher in Bioethics'
    ],
    'orgs' => [
        'Association for Medical Ethics: AME' => 'https://www.ethicaldoctor.org/about-ame/',
        'American Society for Bioethics and Humanities: ASBH' => 'https://asbh.org/about/american-society-bioethics-humanities',
        'Center for Practical Bioethics: Practical Bioethics' => 'https://www.practicalbioethics.org/about-us/'
    ],
    'image' => 'img/careers/clinical_ethicist.png',
    'imgSource' => [
      'link' => 'https://consultqd.clevelandclinic.org/the-ever-expanding-role-of-clinical-ethicists',
      'text' => 'Cleveland Clinic'
    ]
  ],
  'clinical_laboratory_technician' => [
    'title' => 'Clinical Laboratory Technician',
    'description' => 'Clinical laboratory technicians perform laboratory tests to help diagnose, treat, and prevent diseases. They work under the supervision of medical technologists or laboratory managers to analyze bodily fluids, tissues, and other samples.',
    'responsibilities' => [
        'Collecting and preparing samples for testing.',
        'Performing routine laboratory tests and procedures.',
        'Operating and maintaining laboratory equipment.',
        'Recording and analyzing test results.',
        'Adhering to safety and quality control procedures.'
    ],
    'qualifications' => [
        'Associate\'s degree in clinical laboratory science or a related field (minimum).',
        'Certification from a recognized certifying body (e.g., ASCP) (often required to work in hospital laboratories and research institutions).'
    ],
    'pathways' => [
        'Laboratory Technician',
        'Laboratory Supervisor/Manager',
        'Laboratory Director'
    ],
    'orgs' => [
        'American Society for Clinical Pathology: ASCP' => 'https://www.ascp.org/content/about-ascp#',
        'National Accrediting Agency for Clinical Laboratory Science: NAACLS' => 'https://www.naacls.org/About.aspx'
    ],
    'image' => 'img/careers/clinical_lab_technician.png',
    'imgSource' => [
      'link' => 'https://www.cambridgehealth.edu/medical-lab/become-a-medical-lab-technician/',
      'text' => 'Cambridge College of Healthcare & Technology'
    ]
  ],
  'forensic_nurse' => [
    'title' => 'Forensic Nurse',
    'description' => 'Forensic nurses investigate and manage infectious diseases in forensic settings, such as prisons and crime scenes, and provide care to victims of violence.',
    'responsibilities' => [
        'Conducting health assessments and collecting forensic evidence.',
        'Providing care to victims of violence and trauma.',
        'Educating law enforcement and healthcare professionals on forensic issues.',
        'Collaborating with legal and medical teams.',
        'Testifying in court as an expert witness.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in nursing (BSN) (minimum).',
        'Registered Nurse (RN) license.',
        'Certification in forensic nursing (optional but preferred).'
    ],
    'pathways' => [
        'Forensic Nurse',
        'Forensic Nurse Examiner',
        'Director of Forensic Nursing',
        'Legal Nurse Consultant'
    ],
    'orgs' => [
        'International Association of Forensic Nurses: IAFN' => 'https://www.forensicnurses.org/page/IAFN/',
        'Academy of Forensic Nursing: AFN' => 'https://www.goafn.org/about-afn',
        'American Academy of Forensic Sciences: AAFS Forensic Nursing Science' => 'https://www.aafs.org/membership/forensic-nursing-science',
        'Federal Bureau of Investigation (FBI): FBI Careers' => 'https://fbijobs.gov/stem/science-medicine',
        'International Association of Forensic Nurses: IAFN Careers' => 'https://www.forensicnurses.org/Careers/'
    ],
    'image' => 'img/careers/forensic_nurse.png',
    'imgSource' => [
      'link' => 'https://nursing.utah.edu/blog/2021/04/julie-melini-and-rewarding-career-of-forensic-nursing',
      'text' => 'University of Utah College of Nursing'
    ]
  ],
  'infection_control_nurse' => [
    'title' => 'Infection Control Nurse',
    'description' => 'Infection control nurses specialize in preventing and controlling infections within healthcare settings. They develop and implement infection control policies and procedures.',
    'responsibilities' => [
        'Developing and implementing infection prevention and control programs.',
        'Monitoring infection rates and investigating outbreaks.',
        'Educating healthcare staff on infection control practices.',
        'Ensuring compliance with regulatory standards.',
        'Conducting risk assessments and audits.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in nursing (BSN) (minimum).',
        'Registered Nurse (RN) license.',
        'Certification in infection control (CIC) (often preferred).'
    ],
    'pathways' => [
        'Infection Control Nurse',
        'Infection Control Coordinator',
        'Director of Infection Prevention',
        'Consultant in Infection Control'
    ],
    'orgs' => [
        'Infection Control Nurses of Connecticut: ICNC' => 'https://icnc-website.org',
        'Association for Professionals in Infection Control and Epidemiology: APIC' => 'https://www.apic.org',
        'Society for Healthcare Epidemiology of America: SHEA' => 'https://www.shea-online.org',
        'International Society for Infectious Diseases: ISID' => 'https://www.isid.org'
    ],
    'image' => 'img/careers/infection_control_nurse.png',
    'imgSource' => [
      'link' => 'https://www.intelycare.com/career-advice/how-to-become-an-infection-control-nurse/',
      'text' => 'IntelyCare'
    ]
  ],
  'infectious_disease_doctor' => [
    'title' => 'Infectious Disease Doctor',
    'description' => 'Infectious disease doctors, also known as infectious disease specialists, diagnose and treat infections caused by bacteria, viruses, fungi, and parasites.',
    'responsibilities' => [
        'Diagnosing and treating infectious diseases.',
        'Advising on infection control and prevention measures.',
        'Conducting research on infectious diseases.',
        'Prescribing antibiotics and other treatments.',
        'Collaborating with other healthcare professionals.'
    ],
    'qualifications' => [
        'Medical degree (MD or DO).',
        'Residency in internal medicine or pediatrics.',
        'Fellowship in infectious diseases.',
        'Board certification in infectious disease.'
    ],
    'pathways' => [
        'Infectious Disease Specialist',
        'Medical Director of Infectious Diseases',
        'Academic and Research Positions'
    ],
    'orgs' => [
        'Infectious Diseases Society of America: IDSA' => 'https://www.idsociety.org',
        'Pediatric Infectious Diseases Society: PIDS' => 'https://www.pids.org',
        'Association for Professionals in Infection Control and Epidemiology: APIC' => 'https://www.apic.org',
        'Society for Healthcare Epidemiology of America: SHEA' => 'https://www.shea-online.org',
        'International Society for Infectious Diseases: ISID' => 'https://www.isid.org'
    ],
    'image' => 'img/careers/infectious_disease_doctor.png',
    'imgSource' => [
      'link' => 'https://www.usnews.com/education/best-graduate-schools/top-medical-schools/articles/what-an-infectious-disease-doctor-is-and-how-to-become-one',
      'text' => 'US News'
    ]
   ],
   'infectious_disease_officer' => [
    'title' => 'Infectious Disease Officer',
    'description' => 'Infectious disease officers are medical professionals in the military or in government agencies who focus on preventing and controlling infectious diseases.',
    'responsibilities' => [
        'Monitoring and investigating infectious disease outbreaks.',
        'Implementing disease prevention and control programs.',
        'Advising on public health policies.',
        'Conducting research on infectious diseases.',
        'Providing training and education on infection control.'
    ],
    'qualifications' => [
        'Medical degree (MD or DO) or advanced degree in public health or epidemiology.'
    ],
    'pathways' => [
        'Infectious Disease Officer',
        'Public Health Program Manager',
        'Director of Infectious Disease Control',
        'Senior Advisor for Infectious Diseases'
    ],
    'orgs' => [
        'National Association for Public Safety Infection Control Officers: NAPSICO' => 'https://www.napsico.org/',
        'Society for Healthcare Epidemiology of America: SHEA' => 'https://shea-online.org/about/',
        'International Society for Infectious Diseases: ISID' => 'https://isid.org/about-the-international-society-for-infectious-diseases/',
        'Association for Professionals in Infection Control and Epidemiology: APIC' => 'https://apic.org/about-apic/about-apic-overview/',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
        'Public Health Agency of Canada: PHAC Careers' => 'https://www.canada.ca/en/health-canada/campaigns/jobs-health-canada-public-health-agency-canada.html',
        'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
        'United States Army Medical Research Institute of Infectious Diseases (USAMRIID): USAMRIID Careers' => 'https://usamriid.health.mil/index.cfm/work_with_us/employment'
    ],
    'image' => 'img/careers/infectious_disease_officer.png',
    'imgSource' => [
      'link' => 'https://www.defense.gov/News/Feature-Stories/Story/Article/2183039/army-infectious-disease-doctor-aided-guams-covid-19-response/',
      'text' => 'US Department of Defense'
    ]
  ],
  'environmental_health_specialist' => [
    'title' => 'Environmental Health Specialist',
    'description' => 'Environmental health specialists investigate and control environmental factors that affect public health. They work to prevent and mitigate health risks associated with environmental hazards.',
    'responsibilities' => [
        'Conducting inspections and investigations of environmental health hazards.',
        'Developing and implementing programs to control environmental risks.',
        'Educating the public on environmental health issues.',
        'Collecting and analyzing environmental samples.',
        'Ensuring compliance with environmental health regulations.'
    ],
    'qualifications' => [
        'Bachelor’s degree in environmental health, public health, or a related field (minimum).',
        'Certification as a Registered Environmental Health Specialist (REHS) (often preferred).'
    ],
    'pathways' => [
        'Environmental Health Specialist',
        'Director of Environmental Health',
        'Public Health Consultant'
    ],
    'orgs' => [
        'National Environmental Health Association: NEHA' => 'https://www.neha.org/about',
        'Idaho Department of Health and Welfare: Environmental Health' => 'https://healthandwelfare.idaho.gov/health-wellness/environmental-health',
        'American Public Health Association: APHA Environmental Health' => 'https://www.apha.org/topics-and-issues/environmental-health',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
        'U.S. Environmental Protection Agency (EPA): EPA Careers' => 'https://www.epa.gov/careers',
        'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers'
    ],
    'image' => 'img/careers/environmental_health_specialist.png',
    'imgSource' => [
        'link' => 'https://hospitalcareers.com/career-paths/how-to-become-an-environmental-health-practitioner/',
        'text' => 'HospitalCareers'
    ]
  ],
  'epidemiologist' => [
    'title' => 'Epidemiologist',
    'description' => 'Epidemiologists study the patterns, causes, and effects of health and disease conditions in defined populations. They play a critical role in public health by investigating outbreaks, monitoring disease trends, and implementing prevention strategies.',
    'responsibilities' => [
        'Designing and conducting epidemiological studies.',
        'Collecting and analyzing data related to health outcomes.',
        'Investigating disease outbreaks and identifying risk factors.',
        'Developing and implementing public health interventions.',
        'Communicating findings to policymakers, healthcare providers, and the public.'
    ],
    'qualifications' => [
        'Bachelor’s degree in public health, epidemiology, or a related field (minimum).',
        'Master’s degree or Ph.D. in epidemiology or a related field (often required for research positions, managing labs, and policy development).'
    ],
    'pathways' => [
        'Epidemiologist',
        'Director of Epidemiology',
        'Faculty Position in Academia'
    ],
    'orgs' => [
        'Council of State and Territorial Epidemiologists: CSTE' => 'https://www.cste.org/page/about-cste',
        'The Society for Healthcare Epidemiology of America: SHEA' => 'https://shea-online.org/about/',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
        'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers'
    ],
    'image' => 'img/careers/epidemiologist.png',
    'imgSource' => [
        'link' => 'https://online.usc.edu/news/how-to-become-epidemiologist-career-path/',
        'text' => 'USCOnline'
    ]
  ],
  'food_safety_specialist' => [
    'title' => 'Food Safety Specialist',
    'description' => 'Food safety specialists ensure the safety of food products to prevent foodborne illnesses, conducting inspections and developing safety protocols.',
    'responsibilities' => [
        'Conducting food safety inspections and audits.',
        'Developing and implementing food safety protocols.',
        'Investigating foodborne illness outbreaks.',
        'Educating food industry workers on safety practices.'
    ],
    'qualifications' => [
        'Bachelor’s degree in food science, microbiology, or a related field (minimum).',
        'Certification in food safety (e.g., Certified Food Safety Professional, CFSP) (often preferred).'
    ],
    'pathways' => [
        'Food Safety Specialist',
        'Director of Food Safety',
        'Public Health Inspector'
    ],
    'orgs' => [
        'International Association for Food Protection: IAFP' => 'https://www.foodprotection.org/',
        'World Health Organization: WHO Food Safety' => 'https://www.who.int/health-topics/food-safety#tab=tab_1',
        'Food and Drug Administration (FDA): FDA Careers' => 'https://www.fda.gov/about-fda/jobs-and-training-fda',
        'U.S. Department of Agriculture (USDA): USDA Careers' => 'https://www.usda.gov/our-agency/careers',
        'International Food Protection Training Institute (IFPTI): IFPTI Careers' => 'https://www.ifpti.org/careers'
    ],
    'image' => 'img/careers/food_safety_specialist.png',
    'imgSource' => [
        'link' => 'https://en.wikipedia.org/wiki/Food_safety#/media/File:Seafood-_FDA_Lab_2881_(4494783228).jpg',
        'text' => 'Wikipedia'
    ]
  ],
  'infectious_disease_pharmacist' => [
    'title' => 'Infectious Disease Pharmacist',
    'description' => 'Infectious disease pharmacists specialize in the use of antimicrobial medications to treat infectious diseases. They work closely with healthcare teams to optimize antibiotic therapy and manage antimicrobial stewardship programs.',
    'responsibilities' => [
        'Advising on the selection and dosage of antimicrobial medications.',
        'Monitoring and managing patient medication therapies.',
        'Developing and implementing antimicrobial stewardship programs.',
        'Educating healthcare professionals on antimicrobial use.',
        'Conducting research on new antimicrobial treatments.'
    ],
    'qualifications' => [
        'Doctor of Pharmacy (Pharm.D.) degree.',
        'Residency in infectious diseases (optional but preferred).',
        'Board certification in infectious diseases pharmacy (optional but preferred).'
    ],
    'pathways' => [
        'Infectious Disease Pharmacist',
        'Antimicrobial Stewardship Coordinator',
        'Clinical Pharmacy Specialist',
        'Pharmacy Director'
    ],
    'orgs' => [
        'Association for Professionals in Infection Control and Epidemiology: APIC' => 'https://apic.org/about-apic/about-apic-overview/',
        'Society of Infectious Diseases Pharmacists: SIDP' => 'https://www.sidp.org/About',
        'American Pharmacists Association: APhA' => 'https://www.pharmacist.com/who-we-are',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/'
    ],
    'image' => 'img/careers/infectious_disease_pharmacist.png',
    'imgSource' => [
        'link' => 'https://bpsweb.org/infectious-diseases-pharmacy/',
        'text' => 'Board of Pharmacy Specialties'
    ]
  ],
  'infection_preventionist' => [
    'title' => 'Infection Preventionist',
    'description' => 'Infection preventionists specialize in preventing and controlling infections within healthcare settings. They develop and implement infection control policies and procedures.',
    'responsibilities' => [
        'Developing and implementing infection prevention and control programs.',
        'Monitoring infection rates and investigating outbreaks.',
        'Educating healthcare staff on infection control practices.',
        'Ensuring compliance with regulatory standards.',
        'Conducting risk assessments and audits.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in nursing, microbiology, or a related field.',
        'Certification in infection control (CIC) (often preferred).'
    ],
    'pathways' => [
        'Infection Preventionist',
        'Infection Control Coordinator',
        'Director of Infection Prevention'
    ],
    'orgs' => [
        'Association for Professionals in Infection Control and Epidemiology: APIC' => 'https://apic.org/about-apic/about-apic-overview/',
        'American Hospital Association: AHA' => 'https://www.aha.org/about',
        'Infectious Diseases Society of America: IDSA' => 'https://www.idsociety.org/about-idsa/about-idsa/'
    ],
    'image' => 'img/careers/infection_preventionist.png',
    'imgSource' => [
        'link' => 'https://apic.org/monthly_alerts/who-are-infection-preventionists/',
        'text' => 'Association for Professionals in Infection Control and Epidemiology'
    ]
  ],
  'medical_laboratory_scientist' => [
    'title' => 'Medical Laboratory Scientist',
    'description' => 'Medical laboratory scientists conduct complex laboratory tests to diagnose and monitor diseases. They work with various types of samples, including blood, urine, and tissues.',
    'responsibilities' => [
        'Performing and interpreting complex laboratory tests.',
        'Operating and maintaining laboratory equipment.',
        'Ensuring accuracy and reliability of test results.',
        'Adhering to safety and quality control procedures.',
        'Collaborating with healthcare professionals.'
    ],
    'qualifications' => [
        'Bachelor’s degree in medical laboratory science or a related field.',
        'Certification as a Medical Laboratory Scientist (MLS) by ASCP or equivalent.'
    ],
    'pathways' => [
        'Medical Laboratory Scientist',
        'Laboratory Supervisor/Manager',
        'Laboratory Director',
        'Clinical Laboratory Consultant'
    ],
    'orgs' => [
        'American Society for Clinical Laboratory Science: ASCLS Medical Laboratory Scientist' => 'https://ascls.org/how-do-i-become-a-laboratory-professional/',
        'American Society for Clinical Pathology: ASCP' => 'https://www.ascp.org/content/about-ascp#'
    ],
    'image' => 'img/careers/med_lab_scientist.png'
  ],
  'medical_science_liaison' => [
    'title' => 'Medical Science Liaison',
    'description' => 'Medical science liaisons act as a bridge between pharmaceutical companies and healthcare professionals, providing scientific information and support related to infectious diseases.',
    'responsibilities' => [
        'Building relationships with key opinion leaders and healthcare professionals.',
        'Providing scientific and clinical information about infectious disease treatments.',
        'Supporting clinical trials and research initiatives.',
        'Conducting presentations and training sessions.',
        'Gathering insights from the medical community to inform product development.'
    ],
    'qualifications' => [
        'Advanced degree in life sciences (Pharm.D., Ph.D., M.D., or equivalent).'
    ],
    'pathways' => [
        'Medical Science Liaison',
        'Director of Medical Affairs',
        'Clinical Research Liaison'
    ],
    'orgs' => [
        'Medical Science Liaison Society: MSLS' => 'https://themsls.org/about-us/',
        'Accreditation Council for Medical Affairs: ACMA Medical Science Liaison' => 'https://medicalaffairsspecialist.org/what-is-an-msl',
        'Medical Science Liaison Association: MSLA' => 'https://www.msla.org.uk/'
    ],
    'image' => 'img/careers/medical_science_liaison.png',
    'imgSource' => [
        'link' => 'https://www.iqviamedicalsalescareers.com/article/2022-11/what-is-the-next-step-after-medical-science-liaison',
        'text' => 'IQVIA'
    ]
  ],
  'public_health_nurse' => [
    'title' => 'Public Health Nurse',
    'description' => 'Public health nurses work within communities to promote health, prevent disease, and reduce health disparities. They focus on improving the overall health of populations through education, advocacy, and health services.',
    'responsibilities' => [
        'Assessing community health needs.',
        'Developing and implementing health promotion programs.',
        'Providing education on disease prevention and healthy lifestyles.',
        'Conducting screenings and immunizations.',
        'Collaborating with other healthcare professionals and community organizations.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in nursing (BSN) (minimum).',
        'Registered Nurse (RN) license.',
        'Public health certification (e.g., Certified Public Health Nurse) (often preferred).'
    ],
    'pathways' => [
        'Public Health Nurse',
        'Director of Public Health Nursing',
        'Public Health Consultant'
    ],
    'orgs' => [
        'Association of Public Health Nurses: APHN' => 'https://www.phnurse.org/about',
        'American Public Health Association: APHA Public Health Nursing' => 'https://www.apha.org/apha-communities/member-sections/public-health-nursing',
        'Global Network of Public Health Nursing: GNPHN' => 'https://www.gnphn.com/',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/'
    ],
    'image' => 'img/careers/public_health_nurse.png',
    'imgSource' => [
        'link' => 'https://nightingale.edu/blog/public-health-nurse.html',
        'text' => 'Nightingale College'
    ]
  ],
  'tropical_disease_specialist' => [
    'title' => 'Tropical Disease Specialist',
    'description' => 'Tropical disease specialists focus on diseases that are prevalent in tropical and subtropical regions. They conduct research, provide treatment, and develop prevention strategies.',
    'responsibilities' => [
        'Conducting research on tropical diseases and their transmission.',
        'Diagnosing and treating patients with tropical diseases.',
        'Developing and implementing prevention and control programs.',
        'Educating healthcare professionals and the public.',
        'Publishing research findings in scientific journals.'
    ],
    'qualifications' => [
        'Medical degree (MD or DO) or advanced degree in tropical medicine or related field.',
        'Residency and/or fellowship in infectious diseases or tropical medicine.'
    ],
    'pathways' => [
        'Tropical Disease Specialist',
        'Medical Director of Tropical Medicine',
        'Academic and Research Positions',
        'Public Health Consultant'
    ],
    'orgs' => [
        'American Society of Tropical Medicine & Hygiene: ASTMH' => 'https://www.astmh.org',
        'Heritage College of Osteopathic Medicine: Infectious and Tropical Disease Institute' => 'https://www.ohio.edu/medicine/itdi',
        'Royal Society of Tropical Medicine and Hygiene: RSTMH' => 'https://www.rstmh.org',
        'International Society for Neglected Tropical Diseases: ISNTD' => 'https://www.isntd.org',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov',
        'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers'
    ],
    'image' => 'img/careers/tropical_disease_specialist.png',
    'imgSource' => [
        'link' => 'https://www.healthcareers.nhs.uk/explore-roles/doctors/roles-doctors/medicine/tropical-medicine',
        'text' => 'NHS'
    ]
  ],
  'geneticist' => [
    'title' => 'Geneticist',
    'description' => 'Geneticists study genetic factors that influence susceptibility to diseases and develop genetic-based treatments and interventions.',
    'responsibilities' => [
        'Conducting genetic research on infectious diseases.',
        'Analyzing genetic data to identify disease susceptibility.',
        'Developing genetic therapies and interventions.',
        'Collaborating with healthcare professionals and researchers.',
        'Publishing research findings in scientific journals.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in genetics, biology, or a related field (minimum).',
        'Master\'s degree or Ph.D. in genetics or a related field (often required for clinicial genetics, research positions, and policy development).'
    ],
    'pathways' => [
        'Geneticist',
        'Research Scientist',
        'Clinical Geneticist (requires a medical doctorate or doctorate of osteopathic medicine)'
    ],
    'orgs' => [
        'American Society of Human Genetics: ASHG' => 'https://www.ashg.org/about/ashg/',
        'Genetics Society of America: GSA' => 'https://genetics-gsa.org/about-gsa/',
        'National Society of Genetic Counselors: NSGC' => 'https://www.nsgc.org/About/About-NSGC',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
        'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
    ],
    'image' => 'img/careers/geneticist.png',
    'imgSource' => [
        'link' => 'https://www.careerinstem.com/product/geneticist/',
        'text' => 'Career in STEM'
    ]
  ],
  'global_health_specialist' => [
    'title' => 'Global Health Specialist',
    'description' => 'Global health specialists develop and implement programs, conduct research, and collaborate with international organizations to address health issues and improve healthcare outcomes worldwide.',
    'responsibilities' => [
        'Developing and implementing global health programs.',
        'Conducting research on global health issues.',
        'Collaborating with international organizations and governments.',
        'Advocating for global health policies and funding.'
    ],
    'qualifications' => [
        'Bachelor’s degree in public health, international relations, or a related field (minimum).',
        'Master’s degree in global health or related field (often preferred).'
    ],
    'pathways' => [
        'Global Health Specialist',
        'Director of Global Health Programs',
        'International Health Consultant'
    ],
    'orgs' => [
        'American Public Health Association: APHA Global Health' => 'https://apha.org/topics-and-issues/global-health',
        'International Society of Global Health: ISOGH' => 'https://isogh.org/about-us/',
        'U.S. Agency for International Development: USAID Global Health' => 'https://www.usaid.gov/global-health',
        'Public Health Institute: PHI Global Health' => 'https://www.phi.org/our-work/focus-areas/global-health/',
        'United States Agency for International Development (USAID): USAID Careers' => 'https://www.usaid.gov/careers',
        'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
        'Doctors Without Borders: MSF Careers' => 'https://www.doctorswithoutborders.org/careers'
    ],
    'image' => 'img/careers/global_health_specialist.png',
    'imgSource' => [
        'link' => 'https://www.shemmassianconsulting.com/blog/how-to-prepare-for-a-career-in-global-health-as-a-premed',
        'text' => 'Shemmassian Academic Consulting'
    ]
  ],
  'health_communication_specialist' => [
    'title' => 'Health Communication Specialist',
    'description' => 'Health communication specialists develop communication strategies to inform the public about health risks and promote healthy behaviors. They create materials and campaigns to distribute health information.',
    'responsibilities' => [
        'Developing and implementing health communication campaigns.',
        'Creating educational materials and resources.',
        'Collaborating with public health officials and organizations.',
        'Conducting research to evaluate communication strategies.',
        'Managing social media and other communication platforms.'
    ],
    'qualifications' => [
        'Bachelor\'s degree in public health, communication, or a related field (minimum).',
        'Master\'s degree in public health or communication (often preferred).'
    ],
    'pathways' => [
        'Health Communication Specialist',
        'Director of Health Communication',
        'Public Health Consultant',
        'Community Paramedicine'
    ],
    'orgs' => [
        'U.S. Centers for Disease Control and Prevention: CDC Health Communication Specialist' => 'https://www.cdc.gov/nchhstp/day-in-the-life/health-communication-specialists.html',
        'Society for Health Communication: SHC Health Communication' => 'https://www.societyforhealthcommunication.org/health-communication',
        'Healthcare Communications Association: HCA' => 'https://the-hca.org/About-the-HCA/Our-vision-and-objectives',
        'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
        'American Red Cross: Red Cross Careers' => 'https://www.redcross.org/about-us/careers.html'
    ],
    'image' => 'img/careers/health_communication_specialist.png',
    'imgSource' => [
        'link' => 'https://www.gcu.edu/blog/nursing-health-care/health-communication-specialist-jobs',
        'text' => 'Grand Canyon University'
    ]
  ],
  'health_educator' => [
        'title' => 'Health Educator',
        'description' => 'Health educators teach people about behaviors that promote wellness. They develop and implement strategies to improve the health of individuals and communities.',
        'responsibilities' => [
            'Assessing community health needs.',
            'Developing programs and materials to promote health education.',
            'Teaching people about behaviors that promote wellness.',
            'Evaluating the effectiveness of health education programs.',
            'Advocating for improved health resources and policies.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in health education, public health, or a related field (minimum).',
            'Certification as a Certified Health Education Specialist (CHES) (often preferred).'
        ],
        'pathways' => [
            'Health Education Specialist',
            'Director of Health Education',
            'Public Health Consultant'
        ],
        'orgs' => [
            'Society for Public Health Education: SOPHE' => 'https://www.sophe.org/about/',
            'American Public Health Association: APHA Public Health Education and Health Promotion' => 'https://www.apha.org/apha-communities/member-sections/public-health-education-and-health-promotion',
            'American Association of Health Education: AAHE' => 'https://www.omicsonline.org/societies/american-association-of-health-education/',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
            'American Public Health Association (APHA): APHA Careers' => 'https://apha.org/professional-development/careers-at-apha',
            'YMCA: YMCA Careers' => 'https://www.ymca.net/careers'
        ],
        'image' => 'img/careers/health_educator.png',
        'imgSource' => [
            'link' => 'https://www.purdueglobal.edu/blog/health-sciences/how-to-become-health-educator/',
            'text' => 'Purdue Global'
        ]
    ],
    'immunologist' => [
      'title' => 'Immunologist',
      'description' => 'Immunologists study the immune system to understand how it defends the body against infections and diseases. They develop vaccines, treatments, and therapies to enhance immune responses.',
      'responsibilities' => [
          'Conducting research on the immune system and its functions.',
          'Developing and testing vaccines and immunotherapies.',
          'Analyzing data and publishing research findings.',
          'Collaborating with other scientists and healthcare professionals.'
      ],
      'qualifications' => [
          'Bachelor\'s degree in biology, immunology, or a related field (minimum).',
          'Master\'s degree or Ph.D. in immunology or related field (often required for research positions and regulatory affairs).'
      ],
      'pathways' => [
          'Immunologist',
          'Laboratory Director',
          'Academic and Research Positions'
      ],
      'orgs' => [
          'The American Association of Immunologists: AAI' => 'https://www.aai.org/About#gsc.tab=0',
          'American Academy of Allergy, Asthma & Immunology: AAAAI Allergists / Immunologists' => 'https://www.aaaai.org/about/about-allergists-immunologists',
          'International Union of Immunological Societies: IUIS' => 'https://iuis.org/about/',
          'Clinical Immunology Society: CIS' => 'https://clinimmsoc.org/CIS/About.htm',
          'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
      ],
      'image' => 'img/careers/immunologist.png',
      'imgSource' => [
          'link' => 'https://www.imperial.ac.uk/vaccine-research-network/research-themes/immunology/',
          'text' => 'Imperial College'
      ]
    ],
    'microbiologist' => [
      'title' => 'Microbiologist',
      'description' => 'Microbiologists study microorganisms such as bacteria, viruses, fungi, and parasites to understand their impact on humans, animals, plants, and the environment.',
      'responsibilities' => [
          'Conducting research to study microorganisms.',
          'Identifying and classifying microorganisms.',
          'Developing new methods to detect and treat infections.',
          'Analyzing samples and interpreting data.',
          'Collaborating with other scientists and researchers.'
      ],
      'qualifications' => [
          'Bachelor\'s degree in microbiology, biology, or a related field (minimum).',
          'Master\'s degree or Ph.D. in microbiology or a related field (often required for research positions, clinical microbiology positions, and policy development).'
      ],
      'pathways' => [
          'Microbiologist',
          'Research Scientist',
          'Laboratory Director'
      ],
      'orgs' => [
          'American Society for Microbiology: ASM' => 'https://www.asm.org',
          'Microbiology Society: Microbiology' => 'https://microbiologysociety.org',
          'International Union of Microbiology Societies: IUMS' => 'https://www.iums.org',
          'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov',
          'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers'
      ],
      'image' => 'img/careers/microbiologist.png',
      'imgSource' => [
          'link' => 'https://www.csrwire.com/press_releases/774501-food-microbiologist-inspires-next-generation-scientists',
          'text' => 'CSR Wire'
      ]
    ],
    'occupational_health_specialist' => [
      'title' => 'Occupational Health Specialist',
      'description' => 'Occupational health specialists work to prevent and manage infectious diseases in workplace settings. They ensure that workplaces comply with health and safety regulations and promote the health of employees.',
      'responsibilities' => [
          'Conducting workplace health assessments.',
          'Developing and implementing health and safety programs.',
          'Educating employees on health and safety practices.',
          'Ensuring compliance with health and safety regulations.'
      ],
      'qualifications' => [
          'Bachelor\'s degree in occupational health, public health, or a related field (minimum).',
          'Certification in occupational health (e.g., Certified Occupational Health Nurse, COHN) (often preferred).'
      ],
      'pathways' => [
          'Occupational Health Specialist',
          'Occupational Health Nurse',
          'Health and Safety Manager',
          'Director of Occupational Health'
      ],
      'orgs' => [
          'Association of Occupational Health Professionals in Healthcare: AOHP' => 'https://www.aohp.org/aohp/ABOUTAOHP.aspx',
          'American College of Occupational and Environmental Medicine: ACOEM' => 'https://acoem.org/About-ACOEM/Occupational-Environmental-Health-Foundation',
          'National Association of Occupational Health Professionals: NAOHP' => 'https://naohp.com/',
          'Occupational Safety and Health Administration (OSHA): OSHA Careers' => 'https://www.osha.gov/careers',
          'National Safety Council: NSC Careers' => 'https://www.nsc.org/careers'
      ],
      'image' => 'img/careers/occupational_health_specialist.png',
      'imgSource' => [
          'link' => 'https://publichealth.tulane.edu/blog/occupational-health-and-safety-specialist/',
          'text' => 'Tulane University'
      ]
    ],
    'parasitologist' => [
        'title' => 'Parasitologist',
        'description' => 'Parasitologists study parasites and their impact on human health and develop strategies for prevention and treatment.',
        'responsibilities' => [
            'Conducting research on parasites and their life cycles.',
            'Developing and testing treatments for parasitic infections.',
            'Collaborating with healthcare professionals and researchers.',
            'Educating the public on parasite prevention.',
            'Publishing research findings in scientific journals.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in biology, parasitology, or a related field (minimum).',
            'Master\'s degree or Ph.D. in parasitology or a related field (often required for research positions, clinical parasitology, and policy development).'
        ],
        'pathways' => [
            'Parasitologist',
            'Research Scientist',
            'Public Health Consultant'
        ],
        'orgs' => [
            'American Society of Parasitologists: ASP' => 'https://www.amsocparasit.org/mission-vision',
            'American Association of Veterinary Parasitologists: AAVP' => 'https://aavp.org/about-the-aavp-2-2/',
            'World Federation of Parasitologists: WFP' => 'https://www.wfpnet.org/about-wfp/',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
            'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
            'London School of Hygiene & Tropical Medicine: LSHTM Careers' => 'https://jobs.lshtm.ac.uk/',
            'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
        ],
        'image' => 'img/careers/parasitologist.png',
        'imgSource' => [
            'link' => 'https://www.snc.edu/magazine/2021spring-summer/parasiteconference.html',
            'text' => 'St. Norbert College'
        ]
    ],
    'pharmaceutical_regulatory_affairs' => [
        'title' => 'Pharmaceutical Regulatory Affairs Specialist',
        'description' => 'Pharmaceutical regulatory affairs specialists manage the regulatory aspects of bringing new pharmaceutical treatments to market, ensuring compliance with regulatory standards.',
        'responsibilities' => [
            'Preparing and submitting regulatory documents.',
            'Ensuring compliance with regulatory requirements.',
            'Liaising with regulatory agencies.',
            'Monitoring and interpreting regulatory changes.',
            'Supporting clinical trials and product development.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in life sciences, pharmacy, or a related field (minimum).',
            'Certification in regulatory affairs (e.g., Regulatory Affairs Certification, RAC) (optional but preferred).'
        ],
        'pathways' => [
            'Regulatory Affairs Specialist',
            'Director of Regulatory Affairs',
            'Regulatory Affairs Consultant'
        ],
        'orgs' => [
            'Regulatory Affairs Professionals Society: RAPS' => 'https://www.raps.org/who-we-are',
            'The Organization for Professionals in Regulatory Affairs: TOPRA' => 'https://www.topra.org/TOPRA_Member/About_Us/TOPRA/TOPRA_Member/about.aspx',
            'The International Council for Harmonization of Technical Requirements for Pharmaceuticals for Human Use: ICH' => 'https://www.ich.org/',
            'Food and Drug Administration (FDA): FDA Careers' => 'https://www.fda.gov/about-fda/jobs-and-training-fda'
        ],
        'image' => 'img/careers/pharmaceutical_regulatory_affairs.png',
        'imgSource' => [
            'link' => 'https://www.asbmb.org/asbmb-today/careers/052920/regulatory-affairs-positions-in-industry',
            'text' => 'ASBMB'
        ]
    ],
    'public_health_advisor' => [
        'title' => 'Public Health Advisor',
        'description' => 'Public health advisors provide expertise and support for public health programs and policies. They work to improve health outcomes through program development, implementation, and evaluation.',
        'responsibilities' => [
            'Advising on public health policies and programs.',
            'Developing and implementing public health initiatives.',
            'Evaluating the effectiveness of public health programs.',
            'Collaborating with community organizations.',
            'Conducting research and data analysis.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in public health, healthcare administration, or a related field (minimum).',
            'Master\'s degree in public health (MPH) (often preferred).'
        ],
        'pathways' => [
            'Public Health Advisor',
            'Director of Public Health Programs',
            'Public Health Policy Analyst'
        ],
        'orgs' => [
            'U.S. Centers for Disease Control and Prevention: CDC Public Health Advisors and Analysts' => 'https://www.cdc.gov/nchhstp/day-in-the-life/public-health-advisors-analysts.html',
            'National Association of Advisors for the Health Professions: NAAHP' => 'https://www.naahp.org/about-naahp',
            'Oregon Public Health Association: OPHA' => 'https://www.oregonpublichealth.org/about-us',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
            'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
            'American Public Health Association (APHA): APHA Careers' => 'https://apha.org/professional-development/careers-at-apha'
        ],
        'image' => 'img/careers/public_health_advisor.png',
        'imgSource' => [
            'link' => 'https://www.mphonline.org/best-international-public-health-jobs/',
            'text' => 'MPHonline'
        ]
    ],
    'public_health_entomologist' => [
        'title' => 'Public Health Entomologist',
        'description' => 'Public health entomologists study insects and arachnids that transmit infectious diseases, such as mosquitoes and ticks, and develop strategies to control their populations.',
        'responsibilities' => [
            'Conducting research on disease vectors.',
            'Developing and implementing vector control programs.',
            'Monitoring and analyzing insect populations.',
            'Educating the public and healthcare professionals on vector-borne diseases.',
            'Publishing research findings in scientific journals.'
        ],
        'qualifications' => [
            'Bachelor’s degree in entomology, biology, or a related field (minimum).',
            'Master’s degree or Ph.D. in entomology or a related field (often required for research positions, regulation development, and vector control program management).'
        ],
        'pathways' => [
            'Public Health Entomologist',
            'Vector Control Specialist',
            'Research Scientist',
            'Public Health Consultant'
        ],
        'orgs' => [
            'American Society of Tropical Medicine and Hygiene: ASTMH' => 'https://www.astmh.org/about-astmh#Mission%20Statement',
            'Entomological Society of America: ESA Public Health Entomology for All' => 'https://www.entsoc.org/advocacy-initiatives/public-health-entomology-for-all',
            'Public Health Command, East: Entomological Sciences Division' => 'https://phceast.health.mil/Services/Technical-Services/Entomological-Sciences-Division/',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
            'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers',
            'Pan American Health Organization (PAHO): PAHO Careers' => 'https://www.paho.org/en/careers-paho',
            'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
        ],
        'image' => 'img/careers/public_health_entomologist.png',
        'imgSource' => [
            'link' => 'https://karolabs.publichealth.indiana.edu/public-health-entomology-access-program/index.html',
            'text' => 'Indiana University Bloomington'
        ]
    ],
    'vaccine_researcher' => [
        'title' => 'Vaccine Researcher',
        'description' => 'Vaccine researchers develop and test vaccines to prevent infectious diseases. They conduct research to understand pathogens and create effective immunizations against them.',
        'responsibilities' => [
            'Conducting research on pathogens and immune responses.',
            'Developing and testing vaccine candidates.',
            'Analyzing data and publishing research findings.',
            'Collaborating with other scientists and healthcare professionals.',
            'Applying for grants and funding to support research projects.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in biology, immunology, or a related field (minimum).',
            'Master\'s degree or Ph.D. in a specialized area of biomedical science (often required for research positions, managing labs, and policy development).'
        ],
        'pathways' => [
            'Vaccine Researcher',
            'Laboratory Director',
            'Academic and Research Positions'
        ],
        'orgs' => [
            'International AIDS Vaccine Initiative: IAVI' => 'https://www.iavi.org/about-iavi/',
            'Center for Immunization Research: CIR' => 'https://centerforimmunizationresearch.org/about-cir',
            'National Institute of Allergy and Infectious Diseases: NIAID Vaccine Research Center' => 'https://www.niaid.nih.gov/about/vrc',
            'HIV Vaccine Trials Network: HVTN' => 'https://www.hvtn.org/about/about-hvtn.html',
            'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
        ],
        'image' => 'img/careers/vaccine_researcher.png',
        'imgSource' => [
            'link' => 'https://penntoday.upenn.edu/news/racing-deliver-vaccine-masses-coronavirus',
            'text' => 'Penn Today'
        ]
    ],
    'virologist' => [
        'title' => 'Virologist',
        'description' => 'Virologists specialize in the study of viruses and viral diseases. They conduct research to understand virus behavior, develop treatments, and create vaccines.',
        'responsibilities' => [
            'Conducting research on viruses and their mechanisms.',
            'Developing and testing antiviral drugs and vaccines.',
            'Analyzing samples and interpreting data.',
            'Publishing research findings in scientific journals.',
            'Collaborating with other scientists and healthcare professionals.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in microbiology, virology, or a related field (minimum).',
            'Master\'s degree or Ph.D. in virology or related field (often required for research positions, managing labs, and policy development).'
        ],
        'pathways' => [
            'Virologist',
            'Laboratory Director',
            'Academic and Research Positions'
        ],
        'orgs' => [
            'American Society for Virology: ASV' => 'https://asv.org/about-asv/',
            'Pan American Society for Clinical Virology: PASCV' => 'https://www.pascv.org/page/AboutUs',
            'World Society for Virology: WSV' => 'https://ws-virology.org/',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
            'National Institutes of Health (NIH): NIH Careers' => 'https://jobs.nih.gov/'
        ],
        'image' => 'img/careers/virologist.png',
        'imgSource' => [
            'link' => 'https://www.who.int/europe/news-room/feature-stories/item/dr-jelke-fros-virologist-the-netherlands',
            'text' => 'WHO'
        ]
    ],
    'water_quality_specialist' => [
        'title' => 'Water Quality Specialist',
        'description' => 'Water quality specialists monitor and manage water quality to prevent waterborne diseases, ensuring access to safe drinking water.',
        'responsibilities' => [
            'Conducting water quality testing and analysis.',
            'Developing and implementing water safety plans.',
            'Investigating waterborne disease outbreaks.',
            'Collaborating with environmental and public health agencies.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in environmental science, public health, or a related field (minimum).',
            'Certification in water quality or environmental health (optional but preferred).'
        ],
        'pathways' => [
            'Water Quality Specialist',
            'Environmental Health Officer',
            'Director of Water Quality',
            'Public Health Consultant'
        ],
        'orgs' => [
            'Water Quality Association: WQA' => 'https://wqa.org/about-wqa/',
            'EnvironmentalScience.org: Water Quality Specialist' => 'https://www.environmentalscience.org/career/water-quality-specialist',
            'Australian Water Association: Water Quality Specialist Network' => 'https://www.awa.asn.au/membership-specialist-water-networks/water-quality',
            'Environmental Protection Agency (EPA): EPA Careers' => 'https://www.epa.gov/careers',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
        ],
        'image' => 'img/careers/water_quality_specialist1.png'
    ],
    'zoonotic_disease_specialist' => [
        'title' => 'Zoonotic Disease Specialist',
        'description' => 'Zoonotic disease specialists study diseases that can be transmitted from animals to humans. They work to understand, prevent, and control zoonotic diseases.',
        'responsibilities' => [
            'Conducting research on zoonotic diseases and their transmission.',
            'Developing strategies to prevent and control zoonotic outbreaks.',
            'Collaborating with veterinarians, epidemiologists, and other professionals.',
            'Educating the public on zoonotic disease prevention.',
            'Analyzing data and publishing research findings.'
        ],
        'qualifications' => [
            'Bachelor\'s degree in biology, veterinary science, or a related field (minimum).',
            'Master\'s degree or Ph.D. in epidemiology, veterinary science, or related field (often required for research positions, managing labs, and policy development).'
        ],
        'pathways' => [
            'Zoonotic Disease Specialist',
            'Laboratory Director',
            'Public Health Consultant'
        ],
        'orgs' => [
            'U.S. Centers for Disease Control and Prevention: CDC National Center for Emerging and Zoonotic Infectious Diseases' => 'https://www.cdc.gov/ncezid/about/index.html',
            'University of Idaho: Computational One Health' => 'https://onehealth.uidaho.edu/',
            'Department of Environmental and Occupational Health Sciences: DEOHS Zoonotic Disease Clinic' => 'https://deohs.washington.edu/cohr/zoonotic-disease-clinic',
            'Washington State Department of Health: DOH Zoonotic and Vector-borne Disease Program' => 'https://doh.wa.gov/about-us/executive-offices/health-and-science/disease-control-and-health-statistics/communicable-disease-epidemiology/zoonotic-and-vector-borne-disease-program',
            'U.S. Department of Agriculture (USDA): USDA Careers' => 'https://www.usda.gov/our-agency/careers',
            'Centers for Disease Control and Prevention (CDC): CDC Careers' => 'https://jobs.cdc.gov/',
            'World Health Organization (WHO): WHO Careers' => 'https://www.who.int/careers'
        ],
        'image' => 'img/careers/zoonotic_disease_specialist.png',
        'imgSource' => [
            'link' => 'https://www.iaea.org/bulletin/defending-against-zoonoses-through-food-safety',
            'text' => 'IAEA'
        ]
    ],
    'emt' => [
        'title' => 'Emergency Medical Technician (EMT)',
        'description' => 'Emergency Medical Technicians (EMTs) provide critical care and transport for patients in emergency situations. They are often the first responders to medical emergencies, providing life-saving interventions and stabilizing patients for transport to medical facilities.',
        'responsibilities' => [
            'Responding to emergency calls and providing immediate care.',
            'Assessing patient conditions and providing basic life support.',
            'Transporting patients safely to medical facilities.',
            'Using medical equipment such as defibrillators and oxygen tanks.',
            'Documenting patient care and reporting findings to healthcare providers.'
        ],
        'qualifications' => [
            'High school diploma or equivalent (minimum).',
            'Completion of an EMT training program.',
            'Certification as an EMT (e.g., NREMT).',
            'State licensure (varies by state).'
        ],
        'pathways' => [
            'Emergency Medical Technician (EMT)',
            'Advanced EMT (AEMT)',
            'Paramedic',
            'Emergency Medical Services (EMS) Supervisor'
        ],
        'orgs' => [
            'National Registry of Emergency Medical Technicians: NREMT' => 'https://www.nremt.org/',
            'National Association of Emergency Medical Technicians: NAEMT' => 'https://www.naemt.org/',
            'American Ambulance Association: AAA' => 'https://ambulance.org/',
            'Emergency Medical Services (EMS) World' => 'https://www.hmpgloballearningnetwork.com/site/emsworld',
            'Centers for Disease Control and Prevention (CDC): EMS' => 'https://www.cdc.gov/heart-disease/php/data-research/ems/index.html',
            'American Red Cross: Red Cross Careers' => 'https://www.redcross.org/about-us/careers.html'
        ],
        'image' => 'img/careers/EMT.png',
        'imgSource' => [
            'link' => 'https://en.wikipedia.org/wiki/Emergency_medical_technician#/media/File:Star_of_life2.svg',
            'text' => 'Wikipedia'
        ]
    ],
    // Add more careers here
];

// Get the career parameter from the URL
$careerKey = isset($_GET['career']) ? $_GET['career'] : '';

// Check if the career exists in the array. If not, display placeholder
if (array_key_exists($careerKey, $careers)) {
    $career = $careers[$careerKey];
} else {
    $career = [
        'title' => 'Career Not Found',
        'description' => 'The career you are looking for does not exist.',
        'responsibilities' => [],
        'qualifications' => [],
        'pathways' => [],
        'orgs' => [],
        'image' => 'img/CareersIcon.png'
    ];
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <!-- Script for dark/light mode options -->
    <script src="js/color-modes.js"></script>

    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Information about the University of Idaho's SEPA project">
    <meta name="author" content="Kristen Martinet (Polymorphic Games), Mark Otto (Bootstrap), Jacob Thornton (Bootstrap), and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title><?php echo htmlspecialchars($career['title']); ?></title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Overwrite some styling -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #9ba0a2;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #9ba0a2;
        --bs-btn-hover-border-color: #9ba0a2;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #6c757d;
        --bs-btn-active-border-color: #6c757d;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      div.parent {
          text-align: center;
          width: 25%;
      }

      ul {
          display: inline-block;
          text-align: left;
          list-style-position: inside;
          padding-left: 0;
      }

      ul ul {
          padding-left: 100px;
          margin-left: 1em;
          list-style-position: outside;
      }

      .list-group-item {
          border: none; /* Remove borders */
          padding-left: 1rem; /* Add padding for bullets */
          position: relative; /* Needed for bullet positioning */
      }

      .list-group-item:not(.list-group-item .list-group-item)::before {
          content: '\2022'; /* Filled bullet point for main list */
          position: absolute;
          left: 0;
          font-size: 1.5rem;
          line-height: 1;
          color: black; /* Adjust bullet color as needed */
      }

      .list-group .list-group {
          padding-left: 1rem; /* Indent sub-list */
      }

      .list-group .list-group-item::before {
          content: '\25E6'; /* Bullet point for sub-list */
          font-size: 1.5rem;
      }

    </style>


    <!-- Custom styles for the carousel template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>

  <body>
    <!-- Grab SVGs for dark/light mode symbols -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <!-- Dark/Light mode dropdown -->
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    <!-- Navbar -->
    <header data-bs-theme="dark">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Polymorphic Ed.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <!-- About dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="about.html">About Us</a></li>
                  <li><a class="dropdown-item" href="aboutos.html">About Outbreak Simulator</a></li>
                </ul>
              </li> <!-- End About dropdown -->
              <li class="nav-item">
                <a class="nav-link" href="download.html">Download</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="resources.html">Resources</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="people.html">People</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Main body -->
    <main>
      <div class="container marketing">
      <!-- Get career title from PHP career array -->
        <p class="h1 text-center"><?php echo htmlspecialchars($career['title']); ?></p>
        <!-- Get career image from PHP career array -->
        <p class = "text-center"><img src="<?php echo htmlspecialchars($career['image']); ?>" alt="<?php echo htmlspecialchars($career['title']); ?>" class="img-fluid"></p>
        <!-- If there is an image source, get that from the PHP career array -->
        <?php if (!empty($career['imgSource'])): ?>
          <p class = "text-center">Image source: <a href="<?php echo $career['imgSource']['link']; ?>"><?php echo $career['imgSource']['text']; ?></a></p>
          <?php endif; ?>
        <!-- Get career description from PHP career array -->
        <p class="lead text-center"><?php echo htmlspecialchars($career['description']); ?></p>
        <br></br>
        <div class="text-center">
            <!-- Responsibilities (obtained from PHP career array) -->
            <?php if (!empty($career['responsibilities'])): ?>
            <p class ="h2">Key Responsibilities</p>
            <ul>
                <?php foreach ($career['responsibilities'] as $responsibility): ?>
                    <li><?php echo htmlspecialchars($responsibility); ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <!-- Qualifications (obtained from PHP career array) -->
            <?php if (!empty($career['qualifications'])): ?>
                <p class = "h2">Required Qualifications</p>
                <ul>
                    <?php foreach ($career['qualifications'] as $qualification): ?>
                        <li><?php echo htmlspecialchars($qualification); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <!-- Career Pathways (obtained from PHP career array) -->
            <?php if (!empty($career['pathways'])): ?>
                <p class = "h2">Career Pathways</p>
                <ul>
                    <?php foreach ($career['pathways'] as $pathway): ?>
                        <li><?php echo htmlspecialchars($pathway); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <!-- Related Organizations/Employers (obtained from PHP career array) -->
            <?php if (!empty($career['orgs'])): ?>
                <p class = "h2">Related Organizations and Employers</p>
                <ul>
                    <!-- This chunk looks at the 'orgs' element of the current career and insures that the web page displays the information as "organization name : informative hyperlink to org" -->
                    <?php foreach ($career['orgs'] as $orgName => $orgUrl): ?>
                        <?php
                        $parts = explode(': ', $orgName, 2);
                        $mainText = $parts[0];
                        $linkText = $parts[1] ?? '';
                        ?>
                        <li>
                            <?php echo htmlspecialchars($mainText); ?>: 
                            <a href="<?php echo htmlspecialchars($orgUrl); ?>" target="_blank"><?php echo htmlspecialchars($linkText); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <!-- Navigation buttons -->
            <p class = text-center><a class="btn btn-secondary" href="ScienceCareers.html">Science Careers</a> <a class="btn btn-secondary" href="TechnologyCareers.html">Technology Careers</a> <a class="btn btn-secondary" href="EngineeringCareers.html">Engineering Careers</a> <a class="btn btn-secondary" href="MathCareers.html">Mathematics Careers</a> <a class="btn btn-secondary" href="MedicineCareers.html">Medicine Careers</a></p>
            <p class = text-center><a class="btn btn-secondary" href="STEMMcareers.html">Back to Career Hub</a></p>

        </div>
        <br></br>
      </div>
      <!-- FOOTER -->
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2023-2024 Polymorphic Games &middot; <a href="https://www.uidaho.edu/">University of Idaho</a> &middot; <a href="https://nihsepa.org/">SEPA</a> &middot; <a href="https://www.ucf.edu/">University of Central Florida</a></p>
      </footer>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

